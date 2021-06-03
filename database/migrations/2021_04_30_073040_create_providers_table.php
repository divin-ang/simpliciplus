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
  18 => [
    'provider_id' => '19',
    'provider_proposed_by' => 'Grand Chambéry',
    'provider_service' => 'Service des eaux',
    'provider_phone' => "Au 04 79 96 86 70 choix 1 pour Chambéry ou au 04 79 54 53 56 pour l'Antenne des Bauges",
    'provider_phone_timetable' => '"Antenne Chambéry :"8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;"Antenne du Chatelard :"9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-16:30;',
    'provider_postal_address' => "Au 298 rue de Chantabord à Chambéry ou avenue Denis Therme à Le Châtelard",
    'provider_postal_address_timetable' => '"Antenne Chambéry (sur RDV):"8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;"Antenne du Chatelard :"9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-16:30;',
    'provider_postal_address_timetable_rdv' => 'https://www.grandchambery.fr/659-les-informations-pratiques.htm',
    'provider_write_online' => 'https://formulaires.simplici.grandchambery.fr/eau/je-contacte-le-service-des-eaux/',
  ],
  19 => [
    'provider_id' => '20',
    'provider_proposed_by' => 'Grand Chambéry',
    'provider_service' => 'Gestion des déchets',
    'provider_phone' => "0800881007",
    'provider_phone_timetable' => '8:30-12:00 13:30-17:30;8:30-12:00 13:30-17:30;8:30-12:00 13:30-17:30;8:30-12:00 13:30-17:30;8:30-12:00 13:30-17:30;',
    'provider_postal_address' => "",
    'provider_postal_address_timetable' => '',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => 'https://formulaires.simplici.grandchambery.fr/dechets/je-contacte-la-gestion-des-dechets/',
  ],
  20 => [
    'provider_id' => '21',
    'provider_proposed_by' => 'Grand Chambéry',
    'provider_service' => 'Direction de la mobilité',
    'provider_phone' => "Allo Synchro 04 79 68 73 73",
    'provider_phone_timetable' => '8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;',
    'provider_postal_address' => "106 Allée des Blachères, 73026 Chambéry",
    'provider_postal_address_timetable' => '8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;8:30-12:00 13:30-17:00;',
    'provider_postal_address_timetable_rdv' => '',
    'provider_write_online' => 'https://formulaires.simplici.grandchambery.fr/administration-generale/nous-ecrire-en-ligne/',
  ],

  21 => [
    'provider_id' => '22',
    'provider_proposed_by' => 'Ville de Chambéry',
    'provider_service' => 'Service attractivité commerciale',
    'provider_phone' => "04 79 60 20 14",
    'provider_phone_timetable' => "8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;fermé;fermé;",
    'provider_postal_address' => "99 Carré Curial 73000 Chambéry",
    'provider_postal_address_timetable' => "8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;fermé;fermé;",
    'provider_postal_address_timetable_rdv' => 'https://simplici.chambery.fr/je-prends-rendez-vous-avec-le-service-attractivite/',
    'provider_write_online' => 'https://formulaires.simplici.chambery.fr/votre-commerce/je-contacte-le-service-attractivite-commerciale/',
  ],

  22 => [
    'provider_id' => '23',
    'provider_proposed_by' => 'Ville de Chambéry',
    'provider_service' => 'Vie associative',
    'provider_phone' => "04 79 33 95 50",
    'provider_phone_timetable' => "9:00 17:00;9:00 17:00;9:00 17:00;9:00 17:00;9:00 17:00;fermé;fermé;",
    'provider_postal_address' => "",
    'provider_postal_address_timetable' => "",
    'provider_postal_address_timetable_rdv' => "",
    'provider_write_online' => "",
  ],
  23 => [
    'provider_id' => '24',
    'provider_proposed_by' => 'Ville de Chambéry',
    'provider_service' => 'Urbanisme - Autorisation des droits du sol',
    'provider_phone' => "04 79 60 23 51",
    'provider_phone_timetable' => "8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;fermé;fermé;",
    'provider_postal_address' => "99 Carré Curial 73000 Chambéry",
    'provider_postal_address_timetable' => "8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;8:00-12:30 13:30-17h30;fermé;fermé;",
    'provider_postal_address_timetable_rdv' => "",
    'provider_write_online' => "https://formulaires.simplici.chambery.fr/je-demande-une-autorisation-d-urbanisme/je-contacte-le-service-urbanisme/",
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
