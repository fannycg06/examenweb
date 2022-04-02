<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\mal;

class malSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre_v = ["Ransomware", "Spyware","Gusanos","Adware","Troyanos","Redes de robots"];
        $tipo_v = ["Software malicioso","Programa espia", "Capacidad de replicarse","Software con publicidad","Software legitimo","Red de robots"];
        $daños_v = ["Bloquea y denega el acceso a su dispositvo y sus archivos", "Recaba infromacion sobre un dispositivo a red para luego enciarsela al atacante","Infecta un equipo y despues se replica y se extiende a dispositivos adicionales permaneciendo activo en odas las maquinas afectadas", "Crear ingresos para el desarrolador sometiendo a la vistima a publicidad no deseada","Se infiltra en el dispositivo de una vistima presentandose como software legitimo","Es una red de equipos o de codigo informativo que puede desarrollar o ejecutar malware"];
        $imagen_v=["https://latam.kaspersky.com/content/es-mx/images/repository/isc/2021/ransomware-attacks-and-types.jpg", "https://www.avantel.co/blog/wp-content/uploads/2019/07/20.Tienes-claro-qu%C3%A9-es-spyware-Te-ayudamos-a-entenderlo.jpg","https://www.redeszone.net/app/uploads-redeszone.net/2021/05/gusano-Informatico-portada.jpg","https://sistemasumma.files.wordpress.com/2015/03/adware.png","https://sites.google.com/site/ordenadoresyseguridad/_/rsrc/1479314003670/-tipos-de-virus-informaticos/-troyanos-informaticos/troyanos_informaticos.png?height=222&width=320","https://media.kasperskydaily.com/wp-content/uploads/sites/88/2013/04/05231420/botnet_blog_title_vacia.png"];

        for ($i =0;$i<5;$i++)
        { 
            DB::table('mals')->insert([
                'nombre'=>$nombre_v[$i],
                'tipo'=>$tipo_v[$i],
                'daño'=>$daños_v[$i],
                'imagen'=>$imagen_v[$i],

            ]);
        }
    }
}
