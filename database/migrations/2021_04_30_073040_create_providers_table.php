<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Provider;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments("provider_id")->unsigned();
            $table->string("provider_name",100);
            $table->text("provider_phone")->nullable();
            $table->text("provider_mail")->nullable();
            $table->text("provider_postal_address")->nullable();
            $table->timestamps();
        });

        $data=[
  0 => [
    'provider_id' => '1',
    'provider_name' => 'Ville de Chambéry',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  1 => [
    'provider_id' => '2',
    'provider_name' => 'Ministère de la Culture',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  2 => [
    'provider_id' => '3',
    'provider_name' => 'Ministère de l\'Intérieur',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  3 => [
    'provider_id' => '4',
    'provider_name' => 'Caisse Nationale des Allocations Familiales',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  4 => [
    'provider_id' => '5',
    'provider_name' => 'Grand Chambéry',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  5 => [
    'provider_id' => '6',
    'provider_name' => 'Ministère de l\'Europe et Affaires étrangères',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  6 => [
    'provider_id' => '7',
    'provider_name' => 'Ministère des Solidarités et de la Santé',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  7 => [
    'provider_id' => '8',
    'provider_name' => 'L\'Assurance Maladie',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  8 => [
    'provider_id' => '9',
    'provider_name' => 'L\'assurance Retraite',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  9 => [
    'provider_id' => '10',
    'provider_name' => 'Pôle emploi',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  10 => [
    'provider_id' => '11',
    'provider_name' => 'Jobsavoie.com',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  11 => [
    'provider_id' => '12',
    'provider_name' => 'Ministère de la Transformation et Fonction Publique',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  12 => [
    'provider_id' => '13',
    'provider_name' => 'Ministère de la Transition écologique',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  13 => [
    'provider_id' => '14',
    'provider_name' => 'Ministère de l\'Économie des Finances et de la Relance',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  14 => [
    'provider_id' => '15',
    'provider_name' => 'Ministère de la Justice',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  15 => [
    'provider_id' => '16',
    'provider_name' => 'Ministère des Armées',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  16 => [
    'provider_id' => '17',
    'provider_name' => 'Ministère de l\'Éducation nationale de la Jeunesse et des Sports',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
  17 => [
    'provider_id' => '18',
    'provider_name' => 'Ministère de l\'Enseignement supérieur de la Recherche et de l\'Innovation',
    'provider_phone' => '',
    'provider_postal_address' => '',
  ],
];
         
        Provider::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
