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
            $table->text("provider_proposed_by")->nullable();
            $table->text("provider_service")->nullable();
            $table->text("provider_phone")->nullable();
            $table->text("provider_phone_timetable")->nullable();
            $table->text("provider_postal_address")->nullable();
            $table->text("provider_postal_address_timetable")->nullable();
            $table->text("provider_postal_address_timetable_rdv")->nullable();
            $table->text("provider_write_online")->nullable();
            $table->timestamps();
        });

        $data=[
  0 => [
    'provider_id' => '1',
    'provider_proposed_by' => 'Ville de Chambéry',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  1 => [
    'provider_id' => '2',
    'provider_proposed_by' => 'Ministère de la Culture',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  2 => [
    'provider_id' => '3',
    'provider_proposed_by' => 'Ministère de l\'Intérieur',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  3 => [
    'provider_id' => '4',
    'provider_proposed_by' => 'Caisse Nationale des Allocations Familiales',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  4 => [
    'provider_id' => '5',
    'provider_proposed_by' => 'Grand Chambéry',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  5 => [
    'provider_id' => '6',
    'provider_proposed_by' => 'Ministère de l\'Europe et Affaires étrangères',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  6 => [
    'provider_id' => '7',
    'provider_proposed_by' => 'Ministère des Solidarités et de la Santé',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  7 => [
    'provider_id' => '8',
    'provider_proposed_by' => 'L\'Assurance Maladie',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  8 => [
    'provider_id' => '9',
    'provider_proposed_by' => 'L\'assurance Retraite',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  9 => [
    'provider_id' => '10',
    'provider_proposed_by' => 'Pôle emploi',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  10 => [
    'provider_id' => '11',
    'provider_proposed_by' => 'Jobsavoie.com',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  11 => [
    'provider_id' => '12',
    'provider_proposed_by' => 'Ministère de la Transformation et Fonction Publique',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  12 => [
    'provider_id' => '13',
    'provider_proposed_by' => 'Ministère de la Transition écologique',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  13 => [
    'provider_id' => '14',
    'provider_proposed_by' => 'Ministère de l\'Économie des Finances et de la Relance',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  14 => [
    'provider_id' => '15',
    'provider_proposed_by' => 'Ministère de la Justice',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  15 => [
    'provider_id' => '16',
    'provider_proposed_by' => 'Ministère des Armées',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  16 => [
    'provider_id' => '17',
    'provider_proposed_by' => 'Ministère de l\'Éducation nationale de la Jeunesse et des Sports',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
  ],
  17 => [
    'provider_id' => '18',
    'provider_proposed_by' => 'Ministère de l\'Enseignement supérieur de la Recherche et de l\'Innovation',
    'provider_service' => '',
    'provider_phone' => '',
    'provider_phone_timetable' => '',
    'provider_postal_address' => '',
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => '',
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
