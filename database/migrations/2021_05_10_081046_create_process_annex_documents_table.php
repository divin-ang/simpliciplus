<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Process_annex_document;

class CreateProcessAnnexDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('process_annex_documents', function (Blueprint $table) {
           
            $table->unsignedInteger('process_id')->unsigned();;
            $table->foreign('process_id')
                ->references('process_id')
                ->on('processes')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            // Recupertation id container
            $table->unsignedInteger('annex_document_id')->unsigned();;
            $table->foreign('annex_document_id')
                ->references('annex_document_id')
                ->on('annex_documents')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            


            Schema::enableForeignKeyConstraints();
        });

        $data=[
            0 => [
              'process_id' => '249',
              'annex_document_id' => '1',
            ],
            1 => [
                'process_id' => '249',
                'annex_document_id' => '2',
              ],
              2 => [
                'process_id' => '249',
                'annex_document_id' => '3',
              ],
              3 => [
                'process_id' => '249',
                'annex_document_id' => '4',
              ],
              4 => [
                'process_id' => '249',
                'annex_document_id' => '5',
              ],
              5 => [
                'process_id' => '249',
                'annex_document_id' => '6',
              ],
              6 => [
                'process_id' => '249',
                'annex_document_id' => '7',
              ],
              7 => [
                'process_id' => '249',
                'annex_document_id' => '8',
              ],


              8 => [
                'process_id' => '37',
                'annex_document_id' => '9',
              ],
              9 => [
                'process_id' => '37',
                'annex_document_id' => '10',
              ],
              10 => [
                'process_id' => '37',
                'annex_document_id' => '11',
              ],



              11 => [
                'process_id' => '242',
                'annex_document_id' => '12',
              ],
              12 => [
                'process_id' => '242',
                'annex_document_id' => '13',
              ],
              13 => [
                'process_id' => '242',
                'annex_document_id' => '14',
              ],
              14 => [
                'process_id' => '242',
                'annex_document_id' => '15',
              ],
              15 => [
                'process_id' => '242',
                'annex_document_id' => '16',
              ],



              14 => [
                'process_id' => '243',
                'annex_document_id' => '17',
              ],
              15 => [
                'process_id' => '243',
                'annex_document_id' => '18',
              ],



              16 => [
                'process_id' => '43',
                'annex_document_id' => '19',
              ],

              17 => [
                'process_id' => '46',
                'annex_document_id' => '20',
              ],
              18 => [
                'process_id' => '234',
                'annex_document_id' => '20',
              ],




              19 => [
                'process_id' => '155',
                'annex_document_id' => '21',
              ],

              20 => [
                'process_id' => '155',
                'annex_document_id' => '22',
              ],
              21 => [
                'process_id' => '155',
                'annex_document_id' => '23',
              ],


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
