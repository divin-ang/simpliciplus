<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Annex_document;

class CreateAnnexDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annex_documents', function (Blueprint $table) {
            $table->increments("annex_document_id");
            $table->text("annex_document_name");
            $table->text("annex_document_link");
            $table->timestamps();
        });

        $data=[
            0 => [
              'annex_document_id' => '1',
              'annex_document_name' => "Votre carte d'identité (et celle de votre colocataire en cas de collocation)",
              'annex_document_link' => '',
            ],
            1 => [
                'annex_document_id' => '2',
                'annex_document_name' => "Kbis (si vous prenez un abonnement au titre de votre entreprise)",
                'annex_document_link' => '',
            ],
            2 => [
                'annex_document_id' => '3',
                'annex_document_name' => "Certificat de conformité (si votre logement est neuf)",
                'annex_document_link' => '',
              ],
              3 => [
                  'annex_document_id' => '4',
                  'annex_document_name' => "Numéro de votre compteur",
                  'annex_document_link' => '',
              ],
              4 => [
                'annex_document_id' => '5',
                'annex_document_name' => "Relevé de votre compteur",
                'annex_document_link' => '',
              ],
              5 => [
                  'annex_document_id' => '6',
                  'annex_document_name' => "Votre bail si vous êtes locataire",
                  'annex_document_link' => '',
              ],
              6 => [
                'annex_document_id' => '7',
                'annex_document_name' => "Votre acte notarié si vous êtes propriétaire",
                'annex_document_link' => '',
              ],
              7 => [
                  'annex_document_id' => '8',
                  'annex_document_name' => "Le nom de l'ancien occupant du logement",
                  'annex_document_link' => '',
              ],



              8 => ['annex_document_id' => '9','annex_document_name' => "Votre PDI (numéro de point d'installation) de votre logement",'annex_document_link' => '',],
              9 => ['annex_document_id' => '10','annex_document_name' => "Etat des lieux de sortie",'annex_document_link' => '',],
              10 => ['annex_document_id' => '11','annex_document_name' => "Photo de l'index de votre compteur",'annex_document_link' => '',],

              11 => ['annex_document_id' => '12','annex_document_name' => "Pour faire cette demande, nous vous invitons à nous envoyer un courrier à l’adresse sde.bauges@grandchambery.fr en nous joignant  impérativement les pièces indiquées ci-dessous.",'annex_document_link' => '',],
              12 => ['annex_document_id' => '13','annex_document_name' => "Arrêté de permis de construire signé par le Maire de la commune où se situe le bien",'annex_document_link' => '',],
              13 => ['annex_document_id' => '14','annex_document_name' => "Pièce d’identité du demandeur de branchement (sachant que le demandeur doit être titulaire du PC)",'annex_document_link' => '',],
              14 => ['annex_document_id' => '15','annex_document_name' => "Certificat de conformité (uniquement pour les maisons en lotissement)",'annex_document_link' => '',],
              15 => ['annex_document_id' => '16','annex_document_name' => "Plan de masse du projet comportant les réseaux",'annex_document_link' => '',],
              16 => ['annex_document_id' => '17','annex_document_name' => "KBis de la société daté de moins de trois mois si la demande est faite au nom d’une société",'annex_document_link' => '',],

              17 => ['annex_document_id' => '18','annex_document_name' => "Votre PDI (numéro de point d'installation)",'annex_document_link' => '',],
              18 => ['annex_document_id' => '19','annex_document_name' => "Coordonnées de l'entreprise que vous avez contactée pour effectuer les travaux si vous les connaissez",'annex_document_link' => '',],

              19 => ['annex_document_id' => '20','annex_document_name' => "Votre véhicule doit être inscrit à la déchetterie",'annex_document_link' => 'https://form.jotformeu.com/70334171930348',],
              
              20 => ['annex_document_id' => '21','annex_document_name' => "Superficie en m² de mon terrain",'annex_document_link' => '',],

              21 => ['annex_document_id' => '22','annex_document_name' => "Cerfa 11542",'annex_document_link' => 'https://www.service-public.fr/professionnels-entreprises/vosdroits/R15902',],
              22 => ['annex_document_id' => '23','annex_document_name' => "Justificatif d'identité",'annex_document_link' => '',],
              23 => ['annex_document_id' => '24','annex_document_name' => "Permis d'exploitation (cerfa 14407*3) pour les débits de boissons à consommer sur place et les restaurants",'annex_document_link' => '',],
              24 => ['annex_document_id' => '25','annex_document_name' => "Permis de vente de boissons alcolliques la nuit (cerfa 14406*01)" ,'annex_document_link' => '',],




          ];
                   
          Annex_document::insert($data);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annex_documents');
    }
}
