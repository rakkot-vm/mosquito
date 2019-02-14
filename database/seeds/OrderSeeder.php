<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    private $testProducts = '[                        
            {
                "id":"1",
                "title":"Mosquite Net",
                "count":"2",
                "attributes" : [
                    {
                        "title":"Net",
                        "id":"1",
                        "value": {"title":"Red","id":"3","price":"30"}
                    },
                    {
                        "title":"Border color",
                        "id":"3",
                        "value": {"title":"White","id":"2","price":"50"}
                    }
                ],
                "adds" : {
                    "weight" : "300",
                    "height" : "500",
                    "deep" : "20",
                    "holes" : "1"
                }
            },
            {
                "id":"1",
                "title":"Mosquite Net",
                "count":"5",
                "attributes" : [
                    {
                        "title":"Net",
                        "id":"1",
                        "value": {"title":"Grey","id":"2","price":"30"}
                    },
                    {
                        "title":"Border color",
                        "id":"3",
                        "value": {"title":"Black","id":"1","price":"50"}
                    }
                ],
                "adds" : {
                    "weight" : "100",
                    "height" : "500",
                    "deep" : "10",
                    "holes" : "1"
                }
            }
    ]';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => '1',
            'status' => 'paid',
            'amount' => '100500',

            'first_name' => 'TestName',
            'last_name' => 'TestLastName',
            'phone' => '0800300200',
            'email' => 'test@test.test',
            'land' => 'Test land',
            'index' => '061',
            'city' => 'Test city',
            'street' => 'test street',
            'house' => '1',
            'client_type' => 'company',

            'products_json' => $this->testProducts,

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
