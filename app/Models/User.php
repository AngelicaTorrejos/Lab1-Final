<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps=false;

protected $primaryKey = 'CustomerId';
protected $table = 'customer';
// column sa table
protected $fillable = [
'CustomerId', 'Firstname','Middlename','Lastname'
];
}