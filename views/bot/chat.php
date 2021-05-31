<?php
include "askBot.php";
$bot = new askBot;
$questions = [
    //que es salud alimentaria
    "que es la salud alimentaria?" => "Es la combinacion de 3 pilares fundamentales para el bienestar las personas, los cuales son seguridad alimentaria, alimentación nutritiva y equilibrada, y calidad del alimento",
    "como puedo saber si como bien o mal?" => "Para eso existen los patrones de dieta o guías de alimentacion, que te pueden orientar sobre que hay que comer",

    //sintomas
    "sintomas de una mala alimentacion?" =>"1. Cansancio excesivo\n2. Pies y manos hinchadas\n3. Dificultad para ir al baño\n4. Dermatitis o alteraciones en la piel\n5. Caries frecuentes",
    "que señales indican que tengo mala alimentacion?" =>"1. Cansancio\n2. Acné\n3. Mal aliento\n4. Estreñimiento\n5. Cabello quebradizo\n6. Piel apagada\n7. Resfriados frecuentes\n8. Exceso de sudor\n9. Vientre inflamado\n10. Irritabilidad" ,
    "señales de una mala alimentacion" =>"> Piel seca\n> Cambios en el estado de animo y baja energía\n> Ansiedad e Inquietud\n> Comer de más\n> Cabello delgado y uñas quebradizas",

    //vulnerables

    "personas mas vulnerables?" => "Los niños pequeños y las muejeres embarazadas ",
    "personas en peligro?" => "Los niños pequeños y las muejeres embarazadas ",
    
    //riesgos

    "cuales son los riesgos de tener una mala alimentacion?" => "El organismo queda susceptible frente a virus y bacterias, de igual forma, se derivan problemas de hipertensión o presión alta. En cuanto al cerebro y el sistema nerviso, presentan falta de memoria, poca capacidad de retencion o aprendizaje, asi como estados de animo desequilibrados",
    "riesgos de una mala alimentacion?" => "1. Una larga lista de enfermedades asociadas\n2. Deterioro de la memoria\n3. Bajo rendimiento deportivo\n4. Insomnio\n5. Problemas digestivos",
    "cuales son los peligros de una mala alimentacion?" => "> Desnutrición\n> Anemia ferropénica\n> Obesidad\n> Diabetes Mellitus tipo 2\n> Hipertensión arterial\n> Cáncer\n> Deterioro en la memoria\n> Insomnio\n> Dislipidemia\n> Osteoporosis",
    "peligros de una mala dieta?" => "Desnutrición\n- Anemia\n- Obesidad\n- Presión arterial alta\n- Enfermedades cognitivas\n- Mala digestión\n- Sistema inmunitario débil\n- Envejecimiento prematura",
    
    // Enfermedades
    "enfermedades" => "~ Diabetes\n~ Hipertensión\n~ Enfermedades cardivasculares\n~ Anemia\n~ Dislipidemia\n~ Algunos tipos de Cáncer",
    "que enfermades provoca una mala alimentacion?" => "1. Diabetes\n2. Osteopososis\n3. Cáncer de Colón\n4. Sobrepeso y obesidad\n5. Hipertensión arterial\n6. Hipercolesterolemia\n7. Gota\n 8. Caries\n9. Enfermedades Cardiovasculares",
    "enfermedades causadas por mala alimentacion?" => "- Diabetes\n- Osteoporosis\n- Cáncer\n- Sobrepeso y obesidad\n- Hipertension arterial\n- Hipercolesterolemia\n- Gota\n- Caries",
    "tipos de enfermedades alimenticias" => "+ Obesidad  y sobrepeso\n+ Diabetes\n+ Aterosclerosis\n+ Celiaquia\n+ Bulimia y Anorexia",

    //conceptos
    "que es nutricion?" => "Es la ingesta de alimentos en relación con las necesidades dietéticas del organismo",
    "que es la hipertension" => "Es uns transtorno en el que los vasos sanguíneos tiene una tensión persistentemente alta, lo que puede dañarlos",
    "que es el insomnio" => "Es la dificultad de consiliar o mantener el sueño",
    "que es la desnutricion" => "Es la perdida de reservas o debilitacion del organismo por recibir poca o mala alimentación",
    "que es la anemia?" => "Es el síndrome que se caracteriza por la disminucion anormal del número de glóbulos rojos que contiene la sangre",
    "que es la obesidad?" => "Se define como una acumulación anormal o excesiva de grasa en el cuerpo que es perjudicial para la salud",
    "que es la presion arterial alta?" => "Es la fuerza de la sangre al empujar contra las paredes de las arterias",
    "que es la anemia ferropenica?" => "Es una afección en la cual el cuerpo no tiene suficientes glóbulos rojos sanos, ocurre cuando el cuerpo no tiene sificiente cantidad de hierro",
    "que es la dislipidemia?" => "Es una concentración elevada de lípidos (colesterol, triglicéridos o ambos) o una concentración baja de colesterol rico en lipoproteínas (HDL)",
    "que es la osteoporosis?" => "Se le conoce como una enfermedad que se caracteriza por una disminución de la densidad del tejido óseo y tiene como consecuencia una fragilidad exagerada de los huesos",
    "que son las enfermedades cardiovasculares?" => "Son un conjuto de transtornos del corazón y de los vasos sanguineos. Se clasifican en:\n 1. Hipertencion arterial\n 2. Cardiopatía coronaria\n 3. Enfermedad Cerebrovascular\n 4. Enfermedad vascular periferica\n 5. Insuficiencia cardíaca\n 6. Cardiopatía reumática\n cardipatia congénita\n 7. Miocardipatías",
    "que es la diabetes?" => "Se le conoce como una enfermedad crónica e irreversible del metabolismo en la que se produce un exceso de glucosa en la sangre y en la orina",
    "que es el cancer de colon?" => "Es un tipo de cáncer en donde el crecimiento de un tumor afecta al tramo del intestino grueso, el cual tambien puedeafectar a la zona rectal",
    "que es la Hipercolesterolemia?" => "Consiste en un aumento de los niveles considerados normales de colesterol en la sangre",
    "que es la gota?" => "Es la enfermedad que se produce por la formación de critales de una sal de ácido úrico en los tejidos, mas frecuentemente en las articulaciones",
    "que son las caries?" => "Es la destrucción de los tejidos de los dientes causada por la presencia de ácidos producidos por las bacterias de la placa depositada en las superficies dentales",
    "que es la bulimia?" => "Se le conoce como un transtorno alimentario por el cual una persona tiene episodios regulares de comer una gran cantidad de alimento durante los cuales siente una perdida de control sobre la comida",
    "que es la anorexia?" => "Se le comoce como un transtorno alimentario que causa que las personas pierdan mas peso de lo que se considera saludable para su edad y estatura",
    "que es la celiaquia?" => "Es una afección del sistema inmunitario en la que las personas no pueden cosumir gluten porque daña su intestino delgado",
    "que es el cancer?" => "El cáncer puede desarrollarse en cualquier parte del cuerpo, es cuando las celulas crecen sin control y sobrepasan el numero de célular normales. Existen muchos tipos de cancer, es mas que una sola enfermedad. \n\n\n Para mayor información visita el sitio: https://www.cancer.org/es/cancer/aspectos-basicos-sobre-el-cancer/que-es-el-cancer.html",

    //name
    "como te llamas?" =>"Soy PlatoBot y estoy para ayudarte.",
    "cual es tu nombre?" =>"Soy PlatoBot y estoy para ayudarte.",
    "tienes nombre?" =>"Soy PlatoBot y estoy para ayudarte.",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"Como te va?",
    "hello" =>"Un gusto de verte.",
 
    //despedida
    "adios" =>"Cuidate y toma agua.",
    "hasta la proxima" =>"Nos vemos pronto, come frutas y verduraz.",
    "nos vemos" =>"Estare aqui para lo que necesites.",
    "bye" =>"Good bye :3",
    "see you" =>"See you lader ;)",
    //
    "what is your name?" =>" My name is CoroBot",
   


    "cual es tu nombre?" => "Mi nombre es " . $bot->getName(),
    "quien eres?" => "Yo soy un " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (askBot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, no puedo entender tu pregunta, formula bien esta para poder comprenderla, estare ansioso por volver a resolver tus dudas sobre la salud alimenticia.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}

