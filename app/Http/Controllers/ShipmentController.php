<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
class ShipmentController extends Controller
{
   public function index(){
    $shipments=Shipment::all();

    //index page
    return view('index', compact('shipments'));
   }

   public function create(){
    //create shipment page
    return view('create');
   }

   public function store( Request $request){

    //vaildate the request
    $validator = Validator::make($request->all(), [
        'code' => 'required|string',
        'shipper' => 'required|string',
        'image' => 'required|image',
        'weight' => 'required|numeric',
        'description' => 'required|string',
    ]);

    if($validator->fails())
    {
        $error = $validator->errors()->first();
        $arr = array('status' => 'fail', 'message' => $error, 'data' => [], 'status_code' => 400);
        return response()->json($arr);
    }

    //upload the image
    if($request->has('image')){
        $image          = $request->image;
        $extension      = $image->getClientOriginalExtension();
        $imageRename    = time(). uniqid() . '.'.$extension;
        $path           = public_path("public/images/shipments/");

        if(!File::exists($path)) File::makeDirectory($path, 775, true);
        $request->image->move($path , $imageRename);

    }

    //create shipment
    $shipment= Shipment::create([
        'code' => $request->code,
        'shipper' =>  $request->shipper,
        'image' =>  $imageRename,
        'weight' =>  $request->weight,
        'description' => $request->description,
    ]
    );

    $message = 'Inserted Successfully';
    $arr = array('status' => 'success', 'message' => $message, 'data' => [], 'status_code' => 200);
    return response()->json($arr);

   }


   public function edit($id){
    $shipment=Shipment::find($id);

    //edit page
    return view('edit', compact('shipment'));
   }

   public function update(Request $request ,$id){
    $shipment=Shipment::find($id);
     //vaildate the request
     $validator = Validator::make($request->all(), [
        'code' => 'required|string',
        'shipper' => 'required|string',
        'image' => 'required|image',
        'weight' => 'required|numeric',
        'description' => 'required|string',
        'status' => ['required', Rule::in(['Pending', 'Progress','Done'])],
    ]);

    if($validator->fails())
    {
        $error = $validator->errors()->first();
        $arr = array('status' => 'fail', 'message' => $error, 'data' => [], 'status_code' => 400);
        return response()->json($arr);
    }

    //upload the image
    if($request->has('image')){
        $image          = $request->image;
        $extension      = $image->getClientOriginalExtension();
        $imageRename    = time(). uniqid() . '.'.$extension;
        $path           = public_path("public/images/shipments/");

        if(!File::exists($path)) File::makeDirectory($path, 775, true);
        $request->image->move($path , $imageRename);

    }
    $update= $shipment-> update([
        'code' => $request->code,
        'shipper' =>  $request->shipper,
        'image' =>  $imageRename,
        'weight' =>  $request->weight,
        'description' => $request->description,
    ]
    );

    $currentStatus=$shipment->status;

    //check status before updating
    if($currentStatus=="Pending" || $currentStatus=="Progress"  ){
        $shipment->status =$request->status;  
        $shipment->save();
    }
    else{
        $shipment->status=$currentStatus;
        $shipment->save();
    }
   
    if($shipment->status=="Done"){
         //create 3 Journals
        Journal::create([
            "type"=>"Debit_Cash",
            "shipment_id"=>$shipment->id,
        ]
        );

        Journal::create([
            "type"=>"Credit_Revenue",
            "shipment_id"=>$shipment->id,
        ]
        );

        Journal::create([
            "type"=>"Credit_Payable",
            "shipment_id"=>$shipment->id,
        ]
        );
    }



    $message = 'Updated Successfully';
    $arr = array('status' => 'success', 'message' => $message, 'data' => [], 'status_code' => 200);
    return response()->json($arr);



   }

   public function destroy(Request $request,$id){

    $shipment=Shipment::find($id);

    $shipment->delete();

    $message = 'Deleted Successfully';
    $arr = array('status' => 'success', 'message' => $message, 'data' => [], 'status_code' => 200);

    return response()->json($arr);
   }
}
