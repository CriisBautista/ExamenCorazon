<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorazonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('corazon')->insert([
            [
                'TITULO' => 'Localización del corazón',
                'DESCRIPCION' => 'Podras conocer en que parte del cuerpo humano esta tu corazon',
                'ARTICULO1' => 'El corazón está situado en el tórax por detrás del esternón
                                y delante del esófago, la aorta y la columna vertebral. A
                                ambos lados de él están los pulmones. El corazón descansa
                                sobre el diafragma, músculo que separa las cavidades torácica y abdominal.',
                'ARTICULO2' => 'Se encuentra dentro de una bolsa denominada
                                pericardio. La bolsa pericárdica tiene dos hojas: una interna
                                sobre la superficie cardíaca y otra externa que está fijada
                                a los grandes vasos que salen del corazón. Entre ambas
                                hojas existe una escasa cantidad de líquido para evitar su
                                roce cuando late',
                'ARTICULO3' => ' La superficie más externa del pericardio
                                está fijada a las estructuras próximas mediante ligamentos.
                                Así, está unido por éstos al diafragma, la columna vertebral
                                y la pleura de ambos pulmones',
                'ARTICULO4' => '',
                'ARTICULO5' => '',
                'IMAGEN' => 'https://medlineplus.gov/spanish/ency/images/ency/fullsize/15184.jpg',
                'slug' => 'localización_del_corazón'
            ],
            [
                'TITULO' => 'Morfología externa',
                'DESCRIPCION' => 'El corazón tiene forma de cono invertido con la punta (ápex) dirigida hacia la izquierda. En la base se encuen- tran los vasos sanguíneos que llevan la sangre al corazón y también la sacan.',
                'ARTICULO1' => 'El corazón tiene forma de cono invertido con la punta
                                (ápex) dirigida hacia la izquierda. En la base se encuentran los vasos sanguíneos que llevan la sangre al corazón
                                y también la sacan. Los vasos encargados de llevar la sangre al corazón son las venas cavas superior e inferior y las
                                venas pulmonares',
                'ARTICULO2' => 'Los vasos que se ocupan de sacarla son
                                la arteria pulmonar y la aorta. Las venas cavas, que recogen la sangre venosa de todo el cuerpo, desembocan en
                                la aurícula derecha, y las venas pulmonares, que llevan
                                la sangre oxigenada desde los pulmones, terminan en la
                                aurícula izquierda. También se observan dos estructuras:
                                una a la derecha de la aorta y otra a la izquierda de la arteria pulmonar; se denominan orejuelas y forman parte de
                                las aurículas.',
                'ARTICULO3' => 'El corazón tiene una cara anterior, una posterior y dos
                                bordes: derecho e izquierdo. En la superficie cardíaca se halla
                                la grasa por la que avanzan las arterias y las venas que irrigan
                                el corazón, es decir, las arterias coronarias, que llevan sangre
                                al músculo cardíaco, y las venas coronarias, que la sacan.',
                'ARTICULO4' => 'El peso del corazón varía según la edad, el tamaño
                                y el propio peso de la persona. Así, se considera que el
                                corazón pesa el 0,45% del peso corporal en el hombre, y
                                el 0,40% del peso corporal en la mujer, de tal modo que
                                en un adulto de estatura media el peso del corazón oscila
                                entre 250-350 g en los hombres y entre 200-300 g en las
                                mujeres. ',
                'ARTICULO5' => 'Cuando se trata de deportistas profesionales,
                                habitualmente el corazón muestra un aumento fisiológico
                                o natural de su peso.',
                'IMAGEN' => 'https://i.pinimg.com/originals/65/e3/2d/65e32d757fc5c7fd64b6cbbd2205267f.jpg',
                'slug' => 'morfología_externa'
            ],
            [
                'TITULO' => 'Morfología interna',
                'DESCRIPCION' => 'Las cavidades situadas en la parte superior se denominan aurículas, y las dispuestas en la parte inferior, ventrículos.',
                'ARTICULO1' => 'La parte interna del corazón está constituida por cuatro
                                cavidades: dos en el lado derecho y dos en el izquierdo, de
                                ahí que sea común hablar de corazón derecho y corazón
                                izquierdo.',
                'ARTICULO2' => 'Las cavidades situadas en la parte superior se
                                denominan aurículas, y las dispuestas en la parte inferior,
                                ventrículos. En condiciones normales, las cavidades derechas no se comunican con las izquierdas, pues se hallan
                                libro de la salud cardiovascular divididas por un tabique muscular, denominado tabique
                                interauricular, que separa ambas aurículas; el tabique
                                que distancia ambos ventrículos se llama interventricular. ',
                'ARTICULO3' => 'En el tabique interauricular se observa una zona delgada
                                sin músculo, la fosa oval, que está formada por un orificio
                                tapado con una lámina de tejido membranoso, a modo
                                de telón, en el lado de la aurícula izquierda',
                'ARTICULO4' => 'En el feto no está cerrado y la sangre puede pasar de una aurícula a otra.
                                Normalmente, después del nacimiento el tabique se pega y cierra la comunicación. ',
                'ARTICULO5' => '',
                'IMAGEN' => 'https://4.bp.blogspot.com/-jbqKgzfYIUE/V92lFLbSXTI/AAAAAAAAAA4/c5rsckki_gcpowaS1tW2KqBWxblXw09VQCLcB/s1600/AnatomiaInterna.jpg',
                'slug' => 'morfología_interna'
            ],
            [
                'TITULO' => 'Corazón derecho',
                'DESCRIPCION' => 'Consta de una aurícula en la parte superior y un ventrículo en la inferior.',
                'ARTICULO1' => 'El corazón derecho consta de una aurícula en la parte
                                superior y un ventrículo en la inferior. A la aurícula derecha
                                llega la sangre venosa (no oxigenada) de todo el cuerpo a
                                través de las venas cavas, que desembocan en ella',
                'ARTICULO2' => 'Ambas
                                se encuentran en la pared posterior, próximas al tabique: la
                                superior, en la zona más alta, y la inferior, en la baja. También
                                desemboca en la aurícula derecha el seno venoso, conducto
                                que recoge la sangre venosa del corazón. En la cara anterior
                                se ubica la orejuela derecha, de forma triangular ',
                'ARTICULO3' => 'La aurícula se comunica con el ventrículo derecho a
                                través de una válvula, la tricúspide. Esta válvula permite el
                                paso de sangre de la aurícula al ventrículo, pero no en sentido contrario.',
                'ARTICULO4' => 'Cuando el corazón se contrae (sístole), la sangre sale del corazón a través de la válvula pulmonar, pasa a
                                la arteria pulmonar y ésta la lleva a los pulmones para que se oxigene.',
                'ARTICULO5' => 'Las válvulas tricúspide y pulmonar están separadas por una cresta muscular. El ventrículo derecho tiene
                                forma triangular y su superficie muestra músculos, denominados papilares, que sobresalen de ella y sirven de anclaje
                                para la válvula tricúspide. ',
                'IMAGEN' => 'https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2017/12/28/19/36/mcdc-double-outlet-right-ventricle-8col.jpg',
                'slug' => 'corazón_derecho'
            ],
            [
                'TITULO' => 'Corazón izquierdo',
                'DESCRIPCION' => 'Hipoplásico es un tipo raro de enfermedad cardíaca congénita.',
                'ARTICULO1' => 'En la parte superior del corazón izquierdo, como sucede
                                en el derecho, se encuentra la aurícula izquierda, en la que
                                desembocan cuatro venas pulmonares, responsables de
                                llevar la sangre oxigenada desde los pulmones hasta el
                                corazón. Muestra una orejuela larga y estrecha.',
                'ARTICULO2' => 'La aurícula se comunica con el ventrículo a través
                                de una válvula, la mitral, que permite el paso de la sangre
                                desde la primera hasta el segundo, pero no en sentido contrario.',
                'ARTICULO3' => 'Cuando se produce la sístole, la sangre pasa del ventrículo a la arteria aorta a través de la válvula aórtica y es
                                distribuida por todo el organismo',
                'ARTICULO4' => 'El ventrículo izquierdo es más largo y estrecho que el derecho, de tal forma que
                                la punta del corazón está formada por ese ventrículo',
                'ARTICULO5' => 'Se observan dos grupos musculares papilares bien definidos: anterior y posterior, que sirven de anclaje a la válvula mitral.',
                'IMAGEN' => 'https://www.heart.org/-/media/Images/Health-Topics/Congenital-Heart-Defects/Spanish/HLHS_SP-UCM_437948.jpg',
                'slug' => 'corazón_izquierdo'
            ],
            [
                'TITULO' => 'Aurículas y ventrículos',
                'DESCRIPCION' => 'La sangre pobre en oxígeno que retorna del cuerpo fluye hacia la aurícula y ventrículo derechos.',
                'ARTICULO1' => 'Las aurículas tienen las paredes finas y están constituidas, de fuera hacia dentro, por el pericardio, la hoja interna o
                                miocardio y una capa muy fina o endocardio',
                'ARTICULO2' => 'Esta última reviste toda la superficie interna del corazón, incluidas las
                                válvulas, y está formada por una capa de células endoteliales, semejantes a las de los vasos sanguíneos, y fibras
                                de colágeno y elásticas',
                'ARTICULO3' => 'La estructura de los ventrículos es semejante. La diferencia estriba en el grosor de la capa
                                muscular. Mientras que el ventrículo derecho tiene un espesor de 3-4 mm, el izquierdo alcanza aproximadamente
                                los 10 mm',
                'ARTICULO4' => 'Esta diferencia se debe a que, al expulsar la sangre durante la sístole, el ventrículo izquierdo se encuentra
                                con una resistencia mayor: la presión arterial. ',
                'ARTICULO5' => '',
                'IMAGEN' => 'https://medlineplus.gov/spanish/ency/images/ency/fullsize/22700.jpg',
                'slug' => 'aurículas_y_ventrículos'
            ],
            [
                'TITULO' => 'Las válvulas',
                'DESCRIPCION' => 'La sangre pobre en oxígeno que retorna del cuerpo fluye hacia la aurícula y ventrículo derechos.',
                'ARTICULO1' => 'Las válvulas situadas en los orificios que comunican las aurículas y los ventrículos, llamadas tricúspide y mitral,
                                tienen una morfología diferente de las válvulas que se encuentran entre los ventrículos y las arterias pulmonar y
                                aorta, es decir, las válvulas pulmonar y aórtica. Todas tienen la misma función: se abren y dejan pasar la sangre, para
                                después cerrarse e impedir que la sangre retroceda.',
                'ARTICULO2' => 'Las válvulas tricúspide y mitral constan de un anillo que las sujeta al orificio situado entre la aurícula y el
                                ventrículo. Desde el anillo surgen los velos, de cuyo borde salen unas finas prolongaciones, cuerdas tendinosas, que
                                se insertan en la musculatura del ventrículo.',
                'ARTICULO3' => ' Estas cuerdas sirven para sujetar el tejido valvular, de tal manera que, cuando se cierran las válvulas, impiden que los velos
                                se prolapsen hacia las aurículas. La válvula tricúspide tiene tres velos de diferentes tamaños, separados por
                                una zona más estrecha denominada comisura. La válvula mitral presenta dos velos, anterior y posterior, y muestra
                                dos comisuras.',
                'ARTICULO4' => 'Las válvulas pulmonar y aórtica poseen una morfología diferente de las anteriores. Constan también de una
                                zona de unión con el orificio situado, en este caso, entre el ventrículo y la arteria pulmonar o la arteria aorta, respectivamente',
                'ARTICULO5' => 'Las válvulas están constituidas por un tejido membranoso fino y están revestidas por el endocardio, al igual que las demás
                                cavidades del corazón.',
                'IMAGEN' => 'https://www.texasheart.org/wp-content/uploads/2017/12/thi-heart-valves-spanish.jpg',
                'slug' => 'las_válvulas'
            ],
            [
                'TITULO' => 'Vascularización del corazón',
                'DESCRIPCION' => 'Las arterias coronarias llevan sangre oxigenada al mio- cardio o músculo cardíaco.',
                'ARTICULO1' => 'El corazón posee vascularización propia a través de las arterias y venas coronarias',
                'ARTICULO2' => 'Las arterias coronarias llevan sangre oxigenada al miocardio o músculo cardíaco. Nacen en la aorta. Ligeramente
                                por encima de la inserción de la válvula aórtica se observan dos orificios, uno situado a la derecha y otro a la izquierda.',
                'ARTICULO3' => 'Del orificio de la derecha surge la arteria coronaria derecha y del izquierdo, el tronco izquierdo.',
                'ARTICULO4' => 'La arteria coronaria derecha va por la superficie externa de la cara anterior, en la grasa del surco entre la aurícula y el ventrículo derechos, da la vuelta por el borde derecho
                                y alcanza la pared posterior.',
                'ARTICULO5' => 'En la zona media desciende entre ambos ventrículos hasta alcanzar la punta del corazón. Esta última parte se denomina arteria coronaria descendente
                                posterior e irriga la parte posterior del tabique interventricular y la pared posterior del ventrículo izquierdo',
                'IMAGEN' => 'https://medlineplus.gov/spanish/ency/images/ency/fullsize/9367.jpg',
                'slug' => 'vascularización_del_corazón'
            ],
            [
                'TITULO' => 'El tronco izquierdo',
                'DESCRIPCION' => 'Bombea la sangre oxigenada a través de la aorta hacia el resto del cuerpo.',
                'ARTICULO1' => 'Es de corta extensión y se divide enseguida en dos ramas: la arteria coronaria descendente anterior y la arteria circunfleja.',
                'ARTICULO2' => 'la arteria coronaria derecha no llega hasta la zona posterior del tabique interventricular, sino que llega hasta allí la arteria coronaria circunfleja, se denomina dominancia izquierda,
                                y se observa en aproximadamente el 10% de las personas',
                'ARTICULO3' => 'Otra posibilidad es que ambas arterias coronarias, derecha y circunfleja, lleguen hasta la zona media de la
                                pared posterior, situación que aparece aproximadamente en el 15% de las personas.',
                'ARTICULO4' => '',
                'ARTICULO5' => '',
                'IMAGEN' => 'https://d33wubrfki0l68.cloudfront.net/a7548354be8e552c8d9d4a7ba386fec74aa87e03/b9774/assets/images/cardiopatias-congenitas/tronco-arterioso/tronco-arterioso-esquema.jpg',
                'slug' => 'el_tronco_izquierdo'
            ],
            [
                'TITULO' => 'Sistema de conducción',
                'DESCRIPCION' => 'Está conformado por un conjunto de fibras miocárdicas especializadas que producen y transmiten impulsos eléctricos, de forma automática, rítmica y ordenadamente a la masa muscular del corazón, para que esta se contraiga.',
                'ARTICULO1' => 'El corazón consta de un sistema productor de impulsos eléctricos, que hace que las células se contraigan y se produzca el ritmo cardíaco.',
                'ARTICULO2' => 'Se compone de los nodos sinusal y auriculoventricular y del haz de His, que se divide en dos
                                ramas: derecha e izquierda. Están constituidos por pequeños acúmulos de células especializadas capaces de iniciar
                                impulsos eléctricos.',
                'ARTICULO3' => 'El nodo sinusal, de unos 3 mm de diámetro, se encuentra en la aurícula derecha en la desembocadura de la vena cava superior.',
                'ARTICULO4' => 'El nodo auriculoventricular, de 8 × 4 × 1 mm, está situado también en la aurícula derecha, en la pared posterior, próximo al anillo de la válvula tricúspide. Retrasa
                                los impulsos eléctricos, de tal forma que los ventrículos se contraigan después de las aurículas',
                'ARTICULO5' => 'El extremo izquierdo forma el haz de His, de 3 mm, en el tabique interventricular, que se divide en dos ramas:
                                derecha e izquierda. La rama derecha se dirige al ventrículo derecho y allí, a su vez, se ramifica. La rama izquierda se
                                ramifica en el ventrículo izquierdo. Transmite los impulsos eléctricos a los ventrículos.',
                'IMAGEN' => 'https://www.stanfordchildrens.org/content-public/topic/images/38/126238.gif',
                'slug' => 'sistema_de_conducción'
            ],

        ]);

    }
}
