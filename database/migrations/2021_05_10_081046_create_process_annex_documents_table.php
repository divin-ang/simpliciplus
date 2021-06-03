<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Process_annex_document;

class CreateProcessAnnexDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *S
     * @return void
     */
    public function up()
    {

        Schema::create('process_annex_documents', function (Blueprint $table) {
            
            $table->unsignedInteger('process_id')->unsigned();
            $table->foreign('process_id')
                ->references('process_id')
                ->on('processes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('annex_document_id')->unsigned();
            $table->foreign('annex_document_id')
                ->references('annex_document_id')
                ->on('annex_documents')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            


            Schema::enableForeignKeyConstraints();
        });

        $data=[
            0 => ['process_id' => '40','annex_document_id' => "1",],
            1 => ['process_id' => '40','annex_document_id' => "2",],
            2 => ['process_id' => '40','annex_document_id' => "3",],
            3 => ['process_id' => '40','annex_document_id' => "4",],
            4 => ['process_id' => '40','annex_document_id' => "5",],
            5 => ['process_id' => '40','annex_document_id' => "6",],
            6 => ['process_id' => '40','annex_document_id' => "7",],
            7 => ['process_id' => '40','annex_document_id' => "8",],

            8 => ['process_id' => '248','annex_document_id' => "1",],
            9 => ['process_id' => '248','annex_document_id' => "2",],
            10 => ['process_id' => '248','annex_document_id' => "3",],
            11 => ['process_id' => '248','annex_document_id' => "4",],
            12 => ['process_id' => '248','annex_document_id' => "5",],
            13 => ['process_id' => '248','annex_document_id' => "6",],
            14 => ['process_id' => '248','annex_document_id' => "7",],
            15 => ['process_id' => '248','annex_document_id' => "8",],

            16 => ['process_id' => '37','annex_document_id' => "9",],
            17 => ['process_id' => '37','annex_document_id' => "10",],
            18 => ['process_id' => '37','annex_document_id' => "11",],

            19 => ['process_id' => '245','annex_document_id' => "9",],
            20 => ['process_id' => '245','annex_document_id' => "10",],
            21 => ['process_id' => '245','annex_document_id' => "11",],

            22 => ['process_id' => '34','annex_document_id' => "12",],
            23 => ['process_id' => '34','annex_document_id' => "13",],
            24 => ['process_id' => '34','annex_document_id' => "14",],
            25 => ['process_id' => '34','annex_document_id' => "15",],
            26 => ['process_id' => '34','annex_document_id' => "16",],
            27 => ['process_id' => '34','annex_document_id' => "17",],

            28 => ['process_id' => '242','annex_document_id' => "12",],
            29 => ['process_id' => '242','annex_document_id' => "13",],
            30 => ['process_id' => '242','annex_document_id' => "14",],
            31 => ['process_id' => '242','annex_document_id' => "15",],
            32 => ['process_id' => '242','annex_document_id' => "16",],
            33 => ['process_id' => '242','annex_document_id' => "17",],

            32 => ['process_id' => '35','annex_document_id' => "18",],
            33 => ['process_id' => '35','annex_document_id' => "19",],

            32 => ['process_id' => '243','annex_document_id' => "18",],
            33 => ['process_id' => '243','annex_document_id' => "19",],

            34 => ['process_id' => '43','annex_document_id' => "20",],

            35 => ['process_id' => '231','annex_document_id' => "20",],

            36 => ['process_id' => '46','annex_document_id' => "21",],

            37 => ['process_id' => '234','annex_document_id' => "21",],

            38 => ['process_id' => '5','annex_document_id' => "22",],
            39 => ['process_id' => '5','annex_document_id' => "23",],
            40 => ['process_id' => '5','annex_document_id' => "24",],
            41 => ['process_id' => '5','annex_document_id' => "25",],


          ];
                   
          Process_annex_document::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('process_annex_documents');
    }
}
