<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');  // Primary key
            $table->string('project_name');  // Project name
            $table->text('describe')->nullable();  // Project description, nullable
            $table->date('start_date');  // Project start date
            $table->date('end_date');  // Project end date
            $table->timestamp('created_ad')->useCurrent();  // Timestamp for project creation
            $table->timestamp('updated_ad')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));  // Auto-update on modification
            $table->string('status');  // Project status
            
            // Foreign key to pengguna (users) table
            $table->unsignedBigInteger('user_id');  // Foreign key to pengguna
            $table->foreign('user_id')->references('user_id')->on('pengguna')->onDelete('cascade');  // On delete, cascade

            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
?>