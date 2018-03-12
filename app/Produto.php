<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
  //Aqui define a table usada no modelo
  protected $table = 'produtos';

  //Aqui remove a obrigatoriedade de criar os campos 'created_at' e 'modified_at'
  public $timestamps = false;

  //Aqui seta os campos aceitos via request
  protected $fillable = array('nome', 'valor','quantidade');

  protected $guarded = ['id'];


}

?>
