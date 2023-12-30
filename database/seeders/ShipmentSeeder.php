<?php
use Illuminate\Database\Seeder;
use App\Models\Shipment;

class ShipmentSeeder extends Seeder
{
    public function run()
    {
        $shipments = [
            [
                'code' => 'ABC123',
                'shipper' => 'John Doe',
                'image' => 'image1.jpg',
                'weight' => 1.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 100.00,
                'status' => 'Pending',
            ],
            [
                'code' => 'XYZ789',
                'shipper' => 'Jane Smith',
                'image' => 'image2.jpg',
                'weight' => 2.0,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam pellentesque justo, ut cursus urna scelerisque non.',
                'price' => 150.00,
                'status' => 'Progress',
            ],
           
        ];

        foreach ($shipments as $shipment) {
            Shipment::create($shipment);
        }
    }
}