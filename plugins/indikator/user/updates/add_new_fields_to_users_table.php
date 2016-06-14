<?php namespace Indikator\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddNewFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('iu_telephone', 100)->nullable();
            $table->string('iu_fax')->nullable();
            $table->string('iu_mobile')->nullable();
            $table->string('iu_cpf')->nullable();
            $table->string('iu_company', 100)->nullable();
            $table->string('iu_position')->nullable();
            $table->string('iu_country')->nullable();
            $table->string('iu_state')->nullable();
            $table->string('iu_city')->nullable();
            $table->string('iu_address')->nullable();
            $table->string('iu_zipcode')->nullable();
            $table->string('iu_cnpj')->nullable();

        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('iu_telephone');
            $table->dropColumn('iu_fax');
            $table->dropColumn('iu_mobile');
            $table->dropColumn('iu_cpf');
            $table->dropColumn('iu_company');
            $table->dropColumn('iu_position');
            $table->dropColumn('iu_country');
            $table->dropColumn('iu_state');
            $table->dropColumn('iu_city');
            $table->dropColumn('iu_address');
            $table->dropColumn('iu_zipcode');
            $table->dropColumn('iu_cnpj');
        });
    }
}
