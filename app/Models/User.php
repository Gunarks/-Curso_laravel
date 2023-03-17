<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /*
        Podemos usar 3 atributos do laravel para exibição na consulta:
        1 - protected $visible -> Mostra apenas o que estiver setado para a vizualição
        2 - protected $hidden -> Oculta os itens que forem agrupados no array definido
        3 - protected $casts -> Faz a fundição referente ao elemento escolhido, podendo alterar a forma de visualização.
     */


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // Diz quais campos podem ser inseridos ou alterados pelo usuário

        'name',
        'email',
        'password',
    ];

    protected $guarded = [
        // Diz quais campos não podem ser inseridos ou alterados pelo usuário

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at'        => 'datetime',
    ];

    public function addressUser()
    {
        return $this->hasOne(Address::class);
    }
}
