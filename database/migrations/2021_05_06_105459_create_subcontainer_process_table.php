<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SubContainerProcess;

class CreateSubcontainerProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcontainer_process', function (Blueprint $table) {
          
            
            // Recupertation id demarche
            $table->unsignedInteger('process_id')->unsigned();
            $table->foreign('process_id')
                ->references('process_id')
                ->on('processes')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            // Recupertation id subcontainer
            $table->unsignedInteger('subcontainer_id')->unsigned();
            $table->foreign('subcontainer_id')
                ->references('subcontainer_id')
                ->on('subcontainer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                Schema::enableForeignKeyConstraints();
        });
        
        $data =array(
          0 => array('subcontainer_id' => '1', 'process_id' => '1'),
          1 => array('subcontainer_id' => '1', 'process_id' => '2'),
          2 => array('subcontainer_id' => '1', 'process_id' => '3'),
          3 => array('subcontainer_id' => '1', 'process_id' => '4'),
          4 => array('subcontainer_id' => '1', 'process_id' => '5'),
          5 => array('subcontainer_id' => '1', 'process_id' => '6'),
          6 => array('subcontainer_id' => '1', 'process_id' => '7'),
          7 => array('subcontainer_id' => '1', 'process_id' => '8'),
          8 => array('subcontainer_id' => '1', 'process_id' => '9'),
          9 => array('subcontainer_id' => '1', 'process_id' => '10'),
          10 => array('subcontainer_id' => '1', 'process_id' => '11'),
          11 => array('subcontainer_id' => '1', 'process_id' => '12'),
          12 => array('subcontainer_id' => '1', 'process_id' => '13'),
          13 => array('subcontainer_id' => '2', 'process_id' => '14'),
          14 => array('subcontainer_id' => '3', 'process_id' => '15'),
          15 => array('subcontainer_id' => '3', 'process_id' => '16'),
          16 => array('subcontainer_id' => '4', 'process_id' => '17'),
          17 => array('subcontainer_id' => '5', 'process_id' => '18'),
          18 => array('subcontainer_id' => '5', 'process_id' => '19'),
          19 => array('subcontainer_id' => '6', 'process_id' => '20'),
          20 => array('subcontainer_id' => '6', 'process_id' => '21'),
          21 => array('subcontainer_id' => '6', 'process_id' => '22'),
          22 => array('subcontainer_id' => '6', 'process_id' => '23'),
          23 => array('subcontainer_id' => '7', 'process_id' => '24'),
          24 => array('subcontainer_id' => '7', 'process_id' => '25'),
          25 => array('subcontainer_id' => '8', 'process_id' => '26'),
          26 => array('subcontainer_id' => '8', 'process_id' => '27'),
          27 => array('subcontainer_id' => '8', 'process_id' => '28'),
          28 => array('subcontainer_id' => '9', 'process_id' => '29'),
          29 => array('subcontainer_id' => '9', 'process_id' => '30'),
          30 => array('subcontainer_id' => '9', 'process_id' => '31'),
          31 => array('subcontainer_id' => '10', 'process_id' => '32'),
          32 => array('subcontainer_id' => '10', 'process_id' => '33'),
          33 => array('subcontainer_id' => '10', 'process_id' => '34'),
          34 => array('subcontainer_id' => '10', 'process_id' => '35'),
          35 => array('subcontainer_id' => '10', 'process_id' => '36'),
          36 => array('subcontainer_id' => '10', 'process_id' => '37'),
          37 => array('subcontainer_id' => '10', 'process_id' => '38'),
          38 => array('subcontainer_id' => '10', 'process_id' => '39'),
          39 => array('subcontainer_id' => '10', 'process_id' => '40'),
          40 => array('subcontainer_id' => '11', 'process_id' => '41'),
          41 => array('subcontainer_id' => '11', 'process_id' => '42'),
          42 => array('subcontainer_id' => '11', 'process_id' => '43'),
          43 => array('subcontainer_id' => '11', 'process_id' => '44'),
          44 => array('subcontainer_id' => '11', 'process_id' => '45'),
          45 => array('subcontainer_id' => '11', 'process_id' => '46'),
          46 => array('subcontainer_id' => '11', 'process_id' => '47'),
          47 => array('subcontainer_id' => '11', 'process_id' => '48'),
          48 => array('subcontainer_id' => '11', 'process_id' => '49'),
          49 => array('subcontainer_id' => '12', 'process_id' => '50'),
          50 => array('subcontainer_id' => '12', 'process_id' => '51'),
          51 => array('subcontainer_id' => '13', 'process_id' => '52'),
          52 => array('subcontainer_id' => '13', 'process_id' => '53'),
          53 => array('subcontainer_id' => '13', 'process_id' => '54'),
          54 => array('subcontainer_id' => '13', 'process_id' => '55'),
          55 => array('subcontainer_id' => '13', 'process_id' => '56'),
          56 => array('subcontainer_id' => '14', 'process_id' => '57'),
          57 => array('subcontainer_id' => '14', 'process_id' => '58'),
          58 => array('subcontainer_id' => '14', 'process_id' => '59'),
          59 => array('subcontainer_id' => '15', 'process_id' => '60'),
          60 => array('subcontainer_id' => '15', 'process_id' => '61'),
          61 => array('subcontainer_id' => '15', 'process_id' => '62'),
          62 => array('subcontainer_id' => '16', 'process_id' => '63'),
          63 => array('subcontainer_id' => '16', 'process_id' => '64'),
          64 => array('subcontainer_id' => '16', 'process_id' => '65'),
          65 => array('subcontainer_id' => '16', 'process_id' => '66'),
          66 => array('subcontainer_id' => '16', 'process_id' => '67'),
          67 => array('subcontainer_id' => '16', 'process_id' => '68'),
          68 => array('subcontainer_id' => '16', 'process_id' => '69'),
          69 => array('subcontainer_id' => '16', 'process_id' => '70'),
          70 => array('subcontainer_id' => '16', 'process_id' => '71'),
          71 => array('subcontainer_id' => '17', 'process_id' => '72'),
          72 => array('subcontainer_id' => '17', 'process_id' => '73'),
          73 => array('subcontainer_id' => '17', 'process_id' => '74'),
          74 => array('subcontainer_id' => '18', 'process_id' => '75'),
          75 => array('subcontainer_id' => '18', 'process_id' => '76'),
          76 => array('subcontainer_id' => '18', 'process_id' => '77'),
          77 => array('subcontainer_id' => '18', 'process_id' => '78'),
          78 => array('subcontainer_id' => '18', 'process_id' => '79'),
          79 => array('subcontainer_id' => '18', 'process_id' => '80'),
          80 => array('subcontainer_id' => '18', 'process_id' => '81'),
          81 => array('subcontainer_id' => '18', 'process_id' => '82'),
          82 => array('subcontainer_id' => '18', 'process_id' => '83'),
          83 => array('subcontainer_id' => '18', 'process_id' => '84'),
          84 => array('subcontainer_id' => '18', 'process_id' => '85'),
          85 => array('subcontainer_id' => '18', 'process_id' => '86'),
          86 => array('subcontainer_id' => '19', 'process_id' => '87'),
          87 => array('subcontainer_id' => '19', 'process_id' => '88'),
          88 => array('subcontainer_id' => '19', 'process_id' => '89'),
          89 => array('subcontainer_id' => '19', 'process_id' => '90'),
          90 => array('subcontainer_id' => '19', 'process_id' => '91'),
          91 => array('subcontainer_id' => '20', 'process_id' => '92'),
          92 => array('subcontainer_id' => '20', 'process_id' => '93'),
          93 => array('subcontainer_id' => '20', 'process_id' => '94'),
          94 => array('subcontainer_id' => '20', 'process_id' => '95'),
          95 => array('subcontainer_id' => '20', 'process_id' => '96'),
          96 => array('subcontainer_id' => '21', 'process_id' => '97'),
          97 => array('subcontainer_id' => '21', 'process_id' => '98'),
          98 => array('subcontainer_id' => '21', 'process_id' => '99'),
          99 => array('subcontainer_id' => '21', 'process_id' => '100'),
          100 => array('subcontainer_id' => '21', 'process_id' => '101'),
          101 => array('subcontainer_id' => '21', 'process_id' => '102'),
          102 => array('subcontainer_id' => '21', 'process_id' => '103'),
          103 => array('subcontainer_id' => '21', 'process_id' => '104'),
          104 => array('subcontainer_id' => '21', 'process_id' => '105'),
          105 => array('subcontainer_id' => '21', 'process_id' => '106'),
          106 => array('subcontainer_id' => '21', 'process_id' => '107'),
          107 => array('subcontainer_id' => '21', 'process_id' => '108'),
          108 => array('subcontainer_id' => '22', 'process_id' => '109'),
          109 => array('subcontainer_id' => '22', 'process_id' => '110'),
          110 => array('subcontainer_id' => '22', 'process_id' => '111'),
          111 => array('subcontainer_id' => '22', 'process_id' => '112'),
          112 => array('subcontainer_id' => '23', 'process_id' => '113'),
          113 => array('subcontainer_id' => '23', 'process_id' => '114'),
          114 => array('subcontainer_id' => '24', 'process_id' => '115'),
          115 => array('subcontainer_id' => '24', 'process_id' => '116'),
          116 => array('subcontainer_id' => '24', 'process_id' => '117'),
          117 => array('subcontainer_id' => '24', 'process_id' => '118'),
          118 => array('subcontainer_id' => '24', 'process_id' => '119'),
          119 => array('subcontainer_id' => '24', 'process_id' => '120'),
          120 => array('subcontainer_id' => '24', 'process_id' => '121'),
          121 => array('subcontainer_id' => '24', 'process_id' => '122'),
          122 => array('subcontainer_id' => '24', 'process_id' => '123'),
          123 => array('subcontainer_id' => '24', 'process_id' => '124'),
          124 => array('subcontainer_id' => '24', 'process_id' => '125'),
          125 => array('subcontainer_id' => '24', 'process_id' => '126'),
          126 => array('subcontainer_id' => '24', 'process_id' => '127'),
          127 => array('subcontainer_id' => '24', 'process_id' => '128'),
          128 => array('subcontainer_id' => '24', 'process_id' => '129'),
          129 => array('subcontainer_id' => '24', 'process_id' => '130'),
          130 => array('subcontainer_id' => '24', 'process_id' => '131'),
          131 => array('subcontainer_id' => '24', 'process_id' => '132'),
          132 => array('subcontainer_id' => '24', 'process_id' => '133'),
          133 => array('subcontainer_id' => '24', 'process_id' => '134'),
          134 => array('subcontainer_id' => '24', 'process_id' => '135'),
          135 => array('subcontainer_id' => '25', 'process_id' => '136'),
          136 => array('subcontainer_id' => '25', 'process_id' => '137'),
          137 => array('subcontainer_id' => '25', 'process_id' => '138'),
          138 => array('subcontainer_id' => '25', 'process_id' => '139'),
          139 => array('subcontainer_id' => '25', 'process_id' => '140'),
          140 => array('subcontainer_id' => '25', 'process_id' => '141'),
          141 => array('subcontainer_id' => '25', 'process_id' => '142'),
          142 => array('subcontainer_id' => '25', 'process_id' => '143'),
          143 => array('subcontainer_id' => '25', 'process_id' => '144'),
          144 => array('subcontainer_id' => '26', 'process_id' => '145'),
          145 => array('subcontainer_id' => '26', 'process_id' => '146'),
          146 => array('subcontainer_id' => '26', 'process_id' => '147'),
          147 => array('subcontainer_id' => '26', 'process_id' => '148'),
          148 => array('subcontainer_id' => '26', 'process_id' => '149'),
          149 => array('subcontainer_id' => '26', 'process_id' => '150'),
          150 => array('subcontainer_id' => '26', 'process_id' => '151'),
          151 => array('subcontainer_id' => '26', 'process_id' => '152'),
          152 => array('subcontainer_id' => '27', 'process_id' => '153'),
          153 => array('subcontainer_id' => '27', 'process_id' => '154'),
          154 => array('subcontainer_id' => '28', 'process_id' => '155'),
          155 => array('subcontainer_id' => '29', 'process_id' => '156'),
          156 => array('subcontainer_id' => '29', 'process_id' => '157'),
          157 => array('subcontainer_id' => '29', 'process_id' => '158'),
          158 => array('subcontainer_id' => '29', 'process_id' => '159'),
          159 => array('subcontainer_id' => '30', 'process_id' => '160'),
          160 => array('subcontainer_id' => '30', 'process_id' => '161'),
          161 => array('subcontainer_id' => '30', 'process_id' => '162'),
          162 => array('subcontainer_id' => '30', 'process_id' => '163'),
          163 => array('subcontainer_id' => '30', 'process_id' => '164'),
          164 => array('subcontainer_id' => '30', 'process_id' => '165'),
          165 => array('subcontainer_id' => '30', 'process_id' => '166'),
          166 => array('subcontainer_id' => '30', 'process_id' => '167'),
          167 => array('subcontainer_id' => '30', 'process_id' => '168'),
          168 => array('subcontainer_id' => '31', 'process_id' => '169'),
          169 => array('subcontainer_id' => '31', 'process_id' => '170'),
          170 => array('subcontainer_id' => '31', 'process_id' => '171'),
          171 => array('subcontainer_id' => '31', 'process_id' => '172'),
          172 => array('subcontainer_id' => '32', 'process_id' => '173'),
          173 => array('subcontainer_id' => '32', 'process_id' => '174'),
          174 => array('subcontainer_id' => '32', 'process_id' => '175'),
          175 => array('subcontainer_id' => '32', 'process_id' => '176'),
          176 => array('subcontainer_id' => '32', 'process_id' => '177'),
          177 => array('subcontainer_id' => '33', 'process_id' => '178'),
          178 => array('subcontainer_id' => '33', 'process_id' => '179'),
          179 => array('subcontainer_id' => '33', 'process_id' => '180'),
          180 => array('subcontainer_id' => '33', 'process_id' => '181'),
          181 => array('subcontainer_id' => '33', 'process_id' => '182'),
          182 => array('subcontainer_id' => '33', 'process_id' => '183'),
          183 => array('subcontainer_id' => '33', 'process_id' => '184'),
          184 => array('subcontainer_id' => '35', 'process_id' => '185'),
          185 => array('subcontainer_id' => '35', 'process_id' => '186'),
          186 => array('subcontainer_id' => '35', 'process_id' => '265'),
          187 => array('subcontainer_id' => '35', 'process_id' => '187'),
          188 => array('subcontainer_id' => '35', 'process_id' => '188'),
          189 => array('subcontainer_id' => '35', 'process_id' => '189'),
          190 => array('subcontainer_id' => '35', 'process_id' => '190'),
          191 => array('subcontainer_id' => '35', 'process_id' => '191'),
          192 => array('subcontainer_id' => '36', 'process_id' => '192'),
          193 => array('subcontainer_id' => '36', 'process_id' => '193'),
          194 => array('subcontainer_id' => '36', 'process_id' => '194'),
          195 => array('subcontainer_id' => '36', 'process_id' => '195'),
          196 => array('subcontainer_id' => '36', 'process_id' => '196'),
          197 => array('subcontainer_id' => '36', 'process_id' => '197'),
          198 => array('subcontainer_id' => '36', 'process_id' => '198'),
          199 => array('subcontainer_id' => '36', 'process_id' => '199'),
          200 => array('subcontainer_id' => '37', 'process_id' => '200'),
          201 => array('subcontainer_id' => '37', 'process_id' => '201'),
          202 => array('subcontainer_id' => '37', 'process_id' => '202'),
          203 => array('subcontainer_id' => '38', 'process_id' => '203'),
          204 => array('subcontainer_id' => '39', 'process_id' => '204'),
          205 => array('subcontainer_id' => '39', 'process_id' => '205'),
          206 => array('subcontainer_id' => '39', 'process_id' => '206'),
          207 => array('subcontainer_id' => '39', 'process_id' => '207'),
          208 => array('subcontainer_id' => '39', 'process_id' => '208'),
          209 => array('subcontainer_id' => '39', 'process_id' => '209'),
          210 => array('subcontainer_id' => '40', 'process_id' => '210'),
          211 => array('subcontainer_id' => '40', 'process_id' => '211'),
          212 => array('subcontainer_id' => '40', 'process_id' => '212'),
          213 => array('subcontainer_id' => '40', 'process_id' => '213'),
          214 => array('subcontainer_id' => '40', 'process_id' => '214'),
          215 => array('subcontainer_id' => '41', 'process_id' => '215'),
          216 => array('subcontainer_id' => '41', 'process_id' => '216'),
          217 => array('subcontainer_id' => '41', 'process_id' => '217'),
          218 => array('subcontainer_id' => '41', 'process_id' => '218'),
          219 => array('subcontainer_id' => '41', 'process_id' => '219'),
          220 => array('subcontainer_id' => '41', 'process_id' => '220'),
          221 => array('subcontainer_id' => '41', 'process_id' => '221'),
          222 => array('subcontainer_id' => '41', 'process_id' => '222'),
          223 => array('subcontainer_id' => '42', 'process_id' => '223'),
          224 => array('subcontainer_id' => '42', 'process_id' => '224'),
          225 => array('subcontainer_id' => '42', 'process_id' => '225'),
          226 => array('subcontainer_id' => '42', 'process_id' => '226'),
          227 => array('subcontainer_id' => '42', 'process_id' => '227'),
          228 => array('subcontainer_id' => '43', 'process_id' => '228'),
          229 => array('subcontainer_id' => '43', 'process_id' => '229'),
          230 => array('subcontainer_id' => '43', 'process_id' => '230'),
          231 => array('subcontainer_id' => '43', 'process_id' => '231'),
          232 => array('subcontainer_id' => '43', 'process_id' => '232'),
          233 => array('subcontainer_id' => '43', 'process_id' => '233'),
          234 => array('subcontainer_id' => '43', 'process_id' => '234'),
          235 => array('subcontainer_id' => '43', 'process_id' => '235'),
          236 => array('subcontainer_id' => '43', 'process_id' => '236'),
          237 => array('subcontainer_id' => '43', 'process_id' => '237'),
          238 => array('subcontainer_id' => '44', 'process_id' => '238'),
          239 => array('subcontainer_id' => '44', 'process_id' => '239'),
          240 => array('subcontainer_id' => '45', 'process_id' => '240'),
          241 => array('subcontainer_id' => '45', 'process_id' => '241'),
          242 => array('subcontainer_id' => '45', 'process_id' => '242'),
          243 => array('subcontainer_id' => '45', 'process_id' => '243'),
          244 => array('subcontainer_id' => '45', 'process_id' => '244'),
          245 => array('subcontainer_id' => '45', 'process_id' => '245'),
          246 => array('subcontainer_id' => '45', 'process_id' => '246'),
          247 => array('subcontainer_id' => '45', 'process_id' => '247'),
          248 => array('subcontainer_id' => '45', 'process_id' => '248'),
          249 => array('subcontainer_id' => '45', 'process_id' => '249'),
          250 => array('subcontainer_id' => '46', 'process_id' => '250'),
          251 => array('subcontainer_id' => '46', 'process_id' => '251'),
          252 => array('subcontainer_id' => '47', 'process_id' => '252'),
          253 => array('subcontainer_id' => '47', 'process_id' => '253'),
          254 => array('subcontainer_id' => '47', 'process_id' => '254'),
          255 => array('subcontainer_id' => '48', 'process_id' => '255'),
          256 => array('subcontainer_id' => '48', 'process_id' => '256'),
          257 => array('subcontainer_id' => '48', 'process_id' => '257'),
          258 => array('subcontainer_id' => '48', 'process_id' => '258'),
          259 => array('subcontainer_id' => '48', 'process_id' => '259'),
          260 => array('subcontainer_id' => '49', 'process_id' => '260'),
          261 => array('subcontainer_id' => '50', 'process_id' => '261'),
          262 => array('subcontainer_id' => '50', 'process_id' => '262'),
          263 => array('subcontainer_id' => '50', 'process_id' => '263'),
          264 => array('subcontainer_id' => '50', 'process_id' => '264'),
        );
        SubContainerProcess::insert($data);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('subcontainer_process');
    }
}
