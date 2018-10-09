<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
          Storage::disk('public')->deleteDirectory('photos');
          Storage::disk('public')->deleteDirectory('covers');
        


         DB::table('users')->insert([
               'name' =>'Administrador',
               'email' =>'admin@correo.net',
               'password' => bcrypt('123'),
               'created_at' => now(),
               'updated_at' => now()
         ]);


        

         DB::table('authors')->insert([
               'name' => 'Julio Verne',
               'bio' => 'Fue el mayor de los cinco hijos que tuvo el matrimonio formado por Pierre Verne, que procedía de una familia vinculada a la jurisprudencia (su abuelo fue consejero notario de Luis XV y presidente del Colegio de Abogados de Nantes), y de Sophie Allotte de la Fuÿe, perteneciente a una familia de militares.

                En 1847 comenzó sus estudios de derecho en París y se recibió de abogado en 1849, razón por la cual su padre le permite permanecer en París. Mientras tanto seguiría escribiendo teatro. A pesar de los deseos de su padre que quiso que se dedicara a su carrera de abogacía y ante la amenaza de quitarle el financiamiento, Verne sigue sin estar interesado en seguir esa la labor. Y ya sin el financiamiento de su padre, gasta todos sus ahorros en libros y se pasa largas horas en las bibliotecas de París queriendo saberlo todo: estudiando geología, ingeniería y astronomía, conocimientos con los que más adelante documentaría sus fantásticas aventuras y predijera con asombrosa exactitud muchos de los logros científicos del siglo XX. Hablaría de cohetes espaciales, submarinos, helicópteros, aire acondicionado, misiles dirigidos e imágenes en movimiento, mucho antes de que aparecieran estos inventos.

                Recién en 1869 publicaría su primera novela "Cinco semanas en Globo", un éxito fulminante, gracias al cual firmó un espléndido contrato con el editor P. J. Hetzel, que le garantizaría la cantidad anual de 20.000 francos durante los siguientes veinte años, a cambio de lo cual, se obligaría a escribir dos novelas de un nuevo estilo cada año. Luego le siguieron otras novelas a la gran producción del autor: "Viaje al centro de la tierra"(1864), "De la tierra a la luna"(1865), y "20,000 Leguas de viaje submarino"(1870). La última novela antes de su muerte fue "La invasión del mar".',
               'created_at' => now(),
               'updated_at' => now()
         ]);

          DB::table('authors')->insert([
               'name' => ' Miguel de Cervantes Saavedra',
               'bio' => 'Novelista, poeta y dramaturgo   español. Se cree que nació el 29 de septiembre de 1547 en Alcalá de Henares y murió el 22 de abril de 1616 en Madrid, pero fue enterrado el 23 de abril y popularmente se conoce esta fecha como la de su muerte. Es considerado la máxima figura de la literatura española. Es universalmente conocido, sobre todo por haber escrito El ingenioso hidalgo Don Quijote de la Mancha, que muchos críticos han descrito como la primera novela moderna y una de las mejores obras de la literatura universal. Se le ha dado el sobrenombre de Príncipe de los Ingenios.

               Miguel de Cervantes nació en Alcalá de Henares en 1547. Fue el cuarto de los siete hijos de un modesto cirujano, Rodrigo de Cervantes, y de Leonor Cortinas.A los dieciocho años tuvo que huir a Italia porque había herido a un hombre; allí entró al servicio del cardenal Acquaviva. Poco después se alistó como soldado y participó heroicamente en la batalla de Lepanto, en 1571; donde fue herido en el pecho y en la mano izquierda, que le quedó anquilosada. Cervantes siempre se mostró orgulloso de haber participado en la batalla de Lepanto.Continuó unos años como soldado y, en 1575, cuando regresaba a la península junto a su hermano Rodrigo, fueron apresados y llevados cautivos a Argel. Cinco años estuvo prisionero, hasta que en 1580 pudo ser liberado gracias al rescate que aportó su familia y los padres trinitarios. Durante su cautiverio, Cervantes intentó fugarse varias veces, pero nunca lo logró.Cuando en 1580 volvió a la Península tres doce años de ausencia, intentó varios trabajos y solicitó un empleo en <<las Indias>>, que no le fue concedido, Fue una etapa dura para Cervantes, que empezaba a escribir en aquellos años, En 1584 se casó y, entre 1587 y 1600, residió en Sevilla ejerciendo un ingrato y humilde oficio –comisario de abastecimientos-, que le obligaba a recorrer Andalucía requisando alimentos para las expediciones que preparaba Felipe II. La estancia en Sevilla parece ser fundamental en la biografía cervantina, pues tanto los viajes como la cárcel le permitieron conocer todo tipo de gentes que aparecerán como personajes en su obra.Cervantes se transladó a Valladolid en 1604, en busca de mecenas en el entorno de la corte, pues tenía dificultades económicas. Cuando en 1605 publicó la primera parte del Quijote, alcanzó un gran éxito, lo que le permitió publicar en pocos años lo que había ido escribiendo. Sin embargo, a pesar del éxito del Quijote, Cervantes siempre vivió con estrecheces, buscando la protección de algún mecenas entre los nobles, lo que consiguió sólo parcialmente del conde de Lemos, a quien dedicó su última obra, Los trabajos de Persiles y Segismunda. ',
               'created_at' => now(),
               'updated_at' => now()
         ]);
           DB::table('authors')->insert([
               'name' => 'Gabriel García Márquez',
               'bio' => 'utor colombiano, Gabriel García Márquez destacó, sin duda como uno de los más grandes narradores de la literatura del siglo XX, pieza fundamental del conocido como boom latinoamericano, sobre todo por su trabajo dentro del realismo mágico. En 1982, García Márquez recibió el galardón más importante de su carrera, el Premio Nobel de Literatura, otorgado como reconocimiento a toda su obra.

                García Márquez nació y se crió en Aracataca, localidad que luego tendría una importancia clave en muchas de sus obras más conocidas, en una familia cuyo abuelo, coronel, supuso una gran influencia en el joven escritor. A mediados de los años 30, García Márquez dejó atrás su pueblo natal para vivir en Sincelejo y, posteriormente, en Barranquilla.

              Al iniciar sus estudios de Derecho en Bogotá comienza su verdadera pasión por la literatura. Tras el cierre de la Universidad por los grandes disturbios de 1948, García Márquez se mudó a Cartagena y abandona los estudios para trabajar como periodista en varios medios, como El Universal o El Heraldo, profesión a la que dedicaría los siguientes años de su vida, convirtiéndose en una verdadera pasión capaz de rivalizar con la literatura.

              Casado en 1958 con Mercedes Bacha, García Márquez comenzó un periplo de viajes como corresponsal que lo llevará de Barranquilla a Nueva York y finalmente a México. La afinidad del escritor con la Revolución Cubana y su amistad con Fidel Castro dificultaron su estancia en Estados Unidos y en otros países de América Latina. De esta época son sus obras El coronel no tiene quien le escriba o La mala hora.

              Es en 1967 cuando Gabriel García Márquez publicó una de sus novelas más conocidas, Cien años de soledad, obra que ha vendido millones de copias en todo el mundo y que ha sido traducida a decenas de idiomas. Los premios se sucedieron en los años siguientes -Rómulo Gallegos, el Neustadt- y recibió el aplauso de la crítica internacional. Hoy en día, esta novela es considerada como una de las más importantes de todo el siglo XX.

              A partir de Cien años de soledad, García Márquez desarrolló una importante carrera literaria con obras como Relato de un náufrago o El otoño del patriarca, al mismo tiempo que publicaba numerosos ensayos, impregnados de sus ideas políticas, vinculadas a posiciones de izquierda, lo que le supuso el ataque no sólo desde algunos gobiernos, sino desde compañeros del boom latinoamericano, inclinados hacia el nuevo liberalismo económico.

              En 1981 García Márquez publicó Crónica de una muerte anunciada, novela fundamental dentro de su obra y que inclinó a su favor la balanza del Premio Nobel de Literatura otorgado ese mismo año. Con posterioridad llegarían otras obras maestras como El olor de la guayaba o El amor en los tiempos del cólera. De sus últimas obras decir que Memoria de mis putas tristes levantó no poca polémica por el tratamiento de la prostitución y que en 2010 publicó una antología completa de sus conferencias más interesantes, bajo el título de Yo no vengo a decir un discurso.

              Varias de las obras de García Márquez han sido llevadas al cine, aunque ninguna con tanto éxito como sus equivalentes literarios. Quizá habría que destacar las adaptaciones de El coronel no tiene quien le escriba o El amor en tiempos del cólera.

              La obra de Gabriel García Márquez se considera fundamental para entender la literatura en español del siglo XX y su influencia se ha extendido a varias generaciones de escritores rompiendo las barreras propias del idioma y logrando un gran éxito tanto en inglés como en francés o alemán.

              Gabriel García Márquez falleció el 17 de abril de 2014 en la ciudad de México a la edad de 87 años.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
            DB::table('authors')->insert([
               'name' => 'Mark Twain',
               'bio' => 'Twain creció en Hannibal (Misuri), lugar que utilizaría como escenario para las aventuras de Tom Sawyer y Huckleberry Finn. Trabajó como aprendiz de un impresor y como cajista, y participó en la redacción de artículos para el periódico de su hermano mayor Orion. Después de trabajar como impresor en varias ciudades, se hizo piloto navegante en el río Misisipi, trabajó con poco éxito en la minería del oro, y retornó al periodismo. Como reportero, escribió una historia humorística, La célebre rana saltarina del condado de Calaveras (1865), que se hizo muy popular y atrajo la atención hacia su persona a escala nacional, y sus libros de viajes también fueron bien acogidos. Twain había encontrado su vocación.

                Consiguió un gran éxito como escritor y orador. Su ingenio y sátira recibieron alabanzas de críticos y colegas, y se hizo amigo de presidentes estadounidenses, artistas, industriales y realeza europea.

                Carecía de visión financiera y, aunque ganó mucho dinero con sus escritos y conferencias, lo malgastó en varias empresas y se vio obligado a declararse en bancarrota. Con la ayuda del empresario y filántropo Henry Huttleston Rogers finalmente resolvió sus problemas financieros.

                Twain nació durante una de las visitas a la Tierra del cometa Halley y predijo que también «me iré con él»; murió al siguiente regreso a la Tierra del cometa, 74 años después. William Faulkner calificó a Twain como «el padre de la literatura norteamericana»',
               'created_at' => now(),
               'updated_at' => now()
         ]);
             DB::table('authors')->insert([
               'name' => 'Fiódor Dostoyevski',
               'bio' => 'Biografía de Fiódor Dostoyevski
               Escritor ruso, Fiódor Dostoyevski es considerado como uno de los autores más importantes del siglo XIX, tanto dentro de la literatura rusa como en la universal, gracias a la profundidad psicológica y social de sus novelas.

              Nacido en una familia noble, Dostoyevski comenzó su formación en Chermak, aunque tras la muerte de su madre fue enviado a la Escuela de Ingenieros Militares de San Petersburgo, donde trabó contacto con las obras de los grandes narradores clásicos y contemporáneos, con gran influencia del movimiento romántico.

              Tras completar sus estudios de Ingeniería y el grado de subteniente en el ejército ruso, Dostoyevski comenzó a trabajar para la Dirección General de Ingenieros, tiempo en el que realizó una traducción de Balzac que le animó a dedicarse por completo a la literatura y solicitar la excedencia de su puesto. En 1845 publicó su primera novela, Pobres gentes, con la que logró un gran éxito de crítica y público que no se vio refrendado en sus siguientes obras, sumiendo al joven autor ruso en una profunda depresión.

              En 1849 fue arrestado por su pertenencia al grupo intelectual Círculo Petrashevski por sus ideas liberales y enviado a cumplir una cadena de trabajos forzados en Siberia, tras serle conmutada la pena de muerte. En 1854 se reincorporó forzósamente al ejército como soldado raso y fue destinado a Kazajistán, donde conoció a su futura esposa. Tras la amnistía general de 1857, Dostoyevski recuperó su libertad y sus tierras, volviendo a dedicarse a la literatura.

              Contrario al socialismo y ferviente seguidor del cristianismo ortodoxo, su ideología se filtró en libros, como Los demonios o Los hermanos Karamázov, en los que también se asentó su estilo capaz de diseccionar como nadie el fondo del alma humana. Pese a su oposición a las ideas socialistas, fue un firme luchador en contra de la desigualdad social.

              Dostoyevski encadenó de nuevo algunas malas críticas y viajó por Europa en busca de inspiración, pero su afición por el juego le llevó a volver a Moscú casi arruinado. El problema del juego fue una de sus peores aficiones, ya que le llevó a la bancarrota en varias ocasiones. En 1865 publicó la que quizá sea su obra más conocida, Crimen y Castigo, publicada por entregas y que le supuso la vuelta a la actualidad literaria. Por desgracia, debía tanto dinero que tuvo que malvender sus derechos y se comprometió a publicar una novela al año con el riesgo de perder todo su patrimonio intelectual si no lo hacía. De esta época habría que destacar su novela, El jugador.

              Establecido en Ginebra, Dostoyevski siguió escribiendo obras tan conocidas como El idiota o El mensajero ruso. De nuevo comenzó a viajar por Europa acompañado de su segunda mujer, Anna Snítkina, viviendo con grandes apuros económicos hasta que pudo cobrar algunos derechos tras liquidar gran parte de sus deudas, aunque estas le acompañarían más adelante.

              El éxito de Los demonios en 1873 le permitió reeditar gran parte de su obra y conseguir terminar Diario de un escritor y Los hermanos Karamázov, que el propio autor consideró como su obra maestra, pese a que, en esencia, nunca logró terminarla de acuerdo a sus propios esquemas.

              En 1881, Dostoyevski murió en San Petersburgo debido a problemas respiratorios agravados por la epilepsia que había sufrido desde su infancia. A su entierro acudieron miles de personas.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
              DB::table('authors')->insert([
               'name' => 'Franz Kafka',
               'bio' => '(Praga, 1883 - Kierling, Austria, 1924) Escritor checo en lengua alemana cuya obra señala el inicio de la profunda renovación que experimentaría la novela europea en las primeras décadas del siglo XX. Franz Kafka dejó definitivamente atrás el realismo decimonónico al convertir sus narraciones en parábolas de turbadora e inagotable riqueza simbólica: protagonizadas por antihéroes extraviados en un mundo incomprensible, sus novelas reflejan una realidad en apariencia reconocible y cotidiana, pero sometida a inquietantes mutaciones que sumergen al lector en una opresiva y asfixiante pesadilla, plasmación de las angustias e incertidumbres que embargan al hombre contemporáneo.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
               DB::table('authors')->insert([
               'name' => 'Dante Alighieri',
               'bio' => 'Fue poeta, prosista, teórico de la literatura, filósofo y pensador político italiano. Está considerado como una de las personalidades más distinguidas de la literatura universal, apreciado por su espiritualidad y por su profundidad intelectual. Es también conocido como "el Poeta Supremo".

                Nació en Florencia, en el seno de una familia que pertenecía a la pequeña nobleza. Su madre murió cuando todavía era pequeño, y su padre al cumplir los 18 años. El suceso más importante de esta desdichada juventud, según su propia revelación, fue conocer, en el año 1274, a Beatriz, la mujer a quien amó y que exaltó como símbolo supremo de la gracia divina, primero en "La Vida Nueva" y, posteriormente, en su obra maestra, "La Divina Comedia". Obra que se convirtió en cimiento del pensamiento moderno y acabó con la aseveración del entendimiento medieval del mundo. Es considerada la mayor obra literaria compuesta en italiano y una obra maestra de la literatura universal.

                Acerca de su educación se conoce muy poco, aunque sus obras reflejan una vasta erudición que comprendía casi todo el conocimiento de su época. En sus inicios ejercieron una gran influencia sobre él las obras del filósofo y retórico Brunetto Latini.

                Colaboró activamente en las luchas políticas de su tiempo, por lo cual fue exiliado de la ciudad donde nació. Fue un enérgico defensor de la unidad italiana. Redactó varios tratados en latín sobre literatura, política y filosofía.

                La ciudad de Florencia, en 1316, le ofreció a Dante la oportunidad de retornar, pero con las mismas condiciones que solían imponerse a los criminales perdonados por las autoridades de la ciudad. El poeta desestimó la propuesta, objetando que jamás volvería a menos que le fuesen restituidos por completo su dignidad y su honor. Siguió, por tanto, viviendo en el destierro, y vivió sus últimos años en Rávena, donde murió el 14 de septiembre de 1321. Fue sepultado en esta ciudad, pero sus restos han sido requeridos durante siglos por los ciudadanos de florencia, que le tenían reservada una sepultura en la iglesia de la Santa Croce.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
                DB::table('authors')->insert([
               'name' => 'Fernando Savater',
               'bio' => 'Fernando Savater, uno de los intelectuales españoles de mayor prestigio nacional e internacional, es autor de numerosos ensayos (ganó el Premio Nacional por "La tarea del héroe") y también de novelas y obras de teatro. Es codirector de la revista Claves de razón práctica desde su fundación. En esta editorial ha publicado "Invitación a la ética" (Premio Anagrama de Ensayo), "Las razones del antimilitarismo y otras razones", "Humanismo impenitente", "La escuela de Platón", "Filosofía y sexualidad" (compilador) y, en colaboración con Gonzalo Martínez-Fresneda, "Teoría y presencia de la tortura en España".',
               'created_at' => now(),
               'updated_at' => now()
         ]);
                 DB::table('authors')->insert([
               'name' => 'Isaac Asimov',
               'bio' => 'Nacido en el seno de una familia judía, fue el primogénito del matrimonio formado por Judah Asimov y Anna Rachel Berman. Algunos biógrafos fijan erróneamente su nacimiento el día 4 de octubre de 1919, sin reparar en el hecho de que su madre modificó esta fecha con el propósito de que el pequeño Isaac pudiese ingresar en la enseñanza pública un año antes del que le correspondía por su edad. A comienzos de 1923, la familia Asimov abandonó la recién creada Unión Soviética para trasladarse a los Estados Unidos de América. Instalados, en un principio, en el barrio neoyorquino de Brooklyn (habitado en su mayor parte por ciudadanos hebreos), los Asimov salieron adelante en su nuevo país merced a la tienda de dulces regentada por el cabeza de familia, negocio que poco a poco fue prosperando y mudando de ubicación.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
                  DB::table('authors')->insert([
               'name' => 'Albert Camus',
               'bio' => 'Novelista, filósofo, periodista y dramaturgo francés, Albert Camus está considerado una de las figuras intelectuales más importantes de Europa tras el fin de la II Guerra Mundial.

              Nacido en Argel, donde creció y comenzó sus estudios, trabajó como periodista y actor, ligado a movimientos políticos de izquierda. Viajó por Europa y publicó una primera colección de artículos, Bodas, en 1933. Debido a presiones estatales, Camus viaja a París, donde se instala en 1940.

              Sigue trabajando como periodista hasta la llegada de la II Guerra Mundial en la que participa como miembro de la Resistencia Francesa.

              Su obra literaria comienza ligada al existencialismo, como se aprecia en El extranjero (1942) cuyo trasfondo, al igual que muchas de sus obras, está situado en su Argelia natal. Poco a poco, Camus va alejándose tanto del marxismo como del existencialismo y va adoptando posiciones en lo que se denominaría Filosofía del Absurdo, lo que le llevó a manter una agria polémica con Jean Paul Sartre. 

              En 1951 publicaría La peste -obra que sería posteriormente adaptada al cine- en la que el autor refleja el auge del fascismo por toda la Europa de preguerra. Otras obras importantes de Camus a partir de entonces son La Caída (1956), El verano (1954) o El exilio y el reino (1957). La mayoría de su trabajo periodístico también fue recopilado en diversos volúmenes.

              Albert Camus recibió el máximo galardón de las letras, el Premio Nobel de Literatura, en 1957, apenas tres años antes de que muriera en un accidente de carretera, en 1960. Contaba con 46 años de edad.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
                   DB::table('authors')->insert([
               'name' => 'Eduardo Galeano',
               'bio' => 'Eduardo Germán María Hughes Galeano, nació en Montevideo, Uruguay, el 3 de septiembre de 1940. En 1960 inició su carrera periodística como editor de la que sería la mítica revista Marcha. Tras el golpe de Estado de 1973 fue encarcelado y tuvo que exiliarse a Argentina. Publicó "Las venas abiertas de América Latina", libro que marcaría varias generaciones, y que fue censurado por las dictaduras militares de Uruguay, Argentina y Chile. Esta obra proponía una historia de América Latina en clave de descolonización, lo que en ese entonces era impensable en los discursos dominantes. En Argentina fundó la revista cultural Crisis.

                En 1976 fue añadido a la lista de los condenados del escuadrón de la muerte de Videla por lo que tuvo que marcharse de nuevo, esta vez a España, donde escribió la trilogía Memoria del fuego (un repaso por la historia de Latinoamérica). 
                Regresó a Montevideo en 1985. Con otros escritores, como Mario Benedetti, y periodistas de Marcha, fundaron el semanario Brecha.
                En 2007 superó una operación para el tratamiento del cáncer de pulmón, que le ganaría la batalla en 2015. 
                En abril de 2009, el presidente venezolano Hugo Chávez entregó un ejemplar de Las venas abiertas de América Latina al presidente estadounidense Obama durante la quinta Cumbre de las Américas, celebrada en Puerto España, Trinidad y Tobago.
                Junto su obra como periodista desarrolló una obra más narrativa, siempre comprometida y llamada a la reflexión. Destacan la novela corta "Los días siguientes" (1963) a los relatos contenidos en "Vagamundo" (1973). "El libro de los abrazos" fue uno de los libros más exitosos y logrados de Galeano. La obra de Eduardo Galeano nos llama a establecer un frente común contra la pobreza, la miseria moral y material. Sus trabajos trascienden géneros ortodoxos, combinando documental, ficción, periodismo, análisis político e historia. 
                Fue investido Doctor Honoris Causa de la Universidad de La Habana, de El Salvador, la Universidad Veracruzana de México, la Universidad Nacional de Córdoba, Argentina, la Universidad de Buenos Aires, y la Universidad de Guadalajara, México.
                Murió el 13 de abril de 2015, en Montevideo.',
               'created_at' => now(),
               'updated_at' => now()
         ]);
                    DB::table('authors')->insert([
               'name' => 'Federico García Lorca',
               'bio' => 'Federico García Lorca, uno de los poetas más insignes de nuestra época, nació en Fuente Vaqueros, un pueblo andaluz de la vega granadina, el 5 de junio de 1898, el año en que España perdió sus colonias. Su madre, Vicenta Lorca Romero, había sido durante un tiempo maestra de escuela, y su padre, Federico García Rodríguez, poseía terrenos en la vega, donde se cultivaba remolacha y tabaco. En 1909, cuando Federico tenía once años, toda la familia -sus padres, su hermano Francisco, él mismo y sus hermanas Conchita e Isabel- se estableció en la ciudad de Granada, aunque seguiría pasando los veranos en el campo, en Asquerosa (hoy, Valderrubio), donde Federico escribió gran parte de su obra.

                Más tarde, aun después de haber viajado mucho y haber vivido durante largos períodos en Madrid, Federico recordaría cómo afectaba a su obra el ambiente rural de la vega: Amo a la tierra. Me siento ligado a ella en todas mis emociones. Mis más lejanos recuerdos de niño tienen sabor de tierra. Los bichos de la tierra, los animales, las gentes campesinas, tienen sugestiones que llegan a muy pocos. Yo las capto ahora con el mismo espíritu de mis años infantiles. De lo contrario, no hubiera podido escribir Bodas de sangre.

                En sus poemas y en sus dramas se revela como agudo observador del habla, de la música y de las costumbres de la sociedad rural española. Una de las peculiaridades de su obra es cómo ese ambiente, descrito con exactitud, llega a convertirse en un espacio imaginario donde se da expresión a todas las inquietudes más profundas del corazón humano: el deseo, el amor y la muerte, el misterio de la identidad y el milagro de la creación artística.',
               'created_at' => now(),
               'updated_at' => now()
         ]);






               $filePath = 'images/book.jpg';

         DB::table('books')->insert([
               'title' => 'De la Tierra a la Luna',
               'review' => 'Un intrépido proyecto aviva los corazones de los miembros del Gun-Club. Se trata de enviar a la Luna un proyectil que, auxiliado por el monstruoso cañón Columbiad, hará la función de una auténtica nave espacial para hacer realidad en el siglo XIX un viejo sueño: atravesar el espacio y descubrir un mundo lunar hasta entonces en penumbras.',
               
               
                
                'author_id' => 1,
                'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Don Quijote de la Mancha',
               'review' => 'Don Quijote de la Manchaa​ es una novela escrita por el español Miguel de Cervantes Saavedra. Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605, es la obra más destacada de la literatura española y una de las principales de la literatura universal.1​2​ En 1615 apareció su continuación con el título de Segunda parte del ingenioso caballero don Quijote de la Mancha. ',
                
                'author_id' => 2,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Cien años de soledad',
               'review' => 'El libro se compone de 20 capítulos no titulados, en los cuales se narra una historia con una estructura cíclica temporal, puesto que los acontecimientos del pueblo y de la familia Buendía, así como los nombres de los personajes, se repiten una y otra vez, fusionando la fantasía con la realidad. En los tres primeros capítulos se narra el éxodo de un grupo de familias y el establecimiento del pueblo de Macondo, desde el capítulo 4 hasta el 16 se trata el desarrollo económico, político y social del pueblo y los últimos cuatro capítulos narran su decadencia.',
                
               'author_id' => 3,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Las aventuras de Tom Sawyer',
               'review' => 'Las aventuras de Tom Sawyer es una novela del autor estadounidense Mark Twain publicada en 1876,1​2​ actualmente considerada una obra maestra de la literatura. Relata las aventuras de la infancia de Tom Sawyer, un niño que crece durante el antebellum de la Guerra de Secesión en «St. Petersburg», una población de la costa del río Mississipi inspirada en Hannibal, donde creció el autor.',
                
                'author_id' => 4,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'El jugador',
               'review' => 'La narración se desarrolla en primera persona desde el punto de vista de Alekséi Ivánovich, el tutor de una familia rusa que vive en una suite de un hotel de la ciudad de Roulettenbourg, situada en Alemania. El patriarca de la familia, el General, está en deuda con el francés De Grieux y ha hipotecado sus propiedades en Rusia, lo cual le alcanza para pagar sólo una pequeña cantidad del total de su deuda. Al enterarse de la enfermedad de su rica y anciana tía Antonida Vasílevna, a quien llama "la Abuela", el General envía toda una serie de telegramas a Moscú, esperando con ansia la noticia de su fallecimiento. Con la herencia de la anciana el General espera pagar sus deudas y conseguir la mano de Madamoiselle Blanche De Cominges.',
                
                'author_id' => 5,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'La metamorfosis',
               'review' => 'Gregorio es el protagonista de la historia, tiene unos 23 años. Trabaja como viajante de comercio para mantener a su hermana y a sus padres. Se despierta una mañana como un monstruoso insecto. Tras la metamorfosis, Gregorio se encuentra incapacitado para trabajar, y esto obligará a su padre, a su madre y a su hermana, a trabajar para sustentarse. Pasa la mayor parte del tiempo en su habitación y es testigo del abandono y el desdén de parte de su familia, que crece poco a poco. A veces sale de su habitación para recorrer la casa en secreto.',
                
                'author_id' => 6,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'La Divina comedia',
               'review' => 'Este poema se ordena en función del simbolismo del número tres, que evoca la Trinidad Sagrada, el Padre, el Hijo y Espíritu Santo, el equilibrio y la estabilidad, y el triángulo, las tres proposiciones que componen el silogismo, se sumaba al cuatro, que representaba los cuatro elementos: Tierra, aire, fuego y agua, dando como resultado el número siete, como siete son los pecados capitales. Finalmente, el Infierno está dividido en nueve círculos, el Purgatorio en siete y el Paraíso queda formado por nueve esferas que giran como los planetas en torno al sol.',
                
                'author_id' => 7,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Viaje al centro de la Tierra',
               'review' => 'Un antiquísimo manuscrito encontrado por el profesor Lidenbrock prueba que es posible viajar a las entrañas de la Tierra. El sabio se pone en marcha de inmediato junto con su sobrino Axel y el guía Hans. Un mundo ignoto y misterioso se abre ante los ojos de los intrépidos viajeros, que arriesgan su vida en la empresa. La fértil imaginación de Julio Verne encuentra en estos territorios inexplorados el campo ideal para las más fantásticas aventuras. El resultado es un libro vivo y apasionante. La trama es ágil, sorprendente, inesperada, y mantiene su interés hasta la última página. Julio Verne ha desplegado aquí su poderosa imaginación en una obra que, un siglo después, conserva su arte inimitable para despertar la curiosidad del lector.',
                
                 'author_id' => 1,
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Yo,Robot',
               'review' => 'Yo, robot es una colección de relatos en los que se establecen y plantean los problemas de las tres leyes de la robótica que son un compendio fijo e imprescindible de moral aplicable a supuestos robots inteligentes. Los relatos plantean diferentes situaciones a las que tendrán que enfrentarse distintos especialistas en robótica y en las que se plantean paradojas e ingeniosos ejercicios intelectuales que indagan sobre la situación del hombre actual en el universo tecnológico. La protagonista de varias de las historias es Susan Calvin, experta en robopsicología.',
               

                'author_id' => 9,
               'created_at' => now(),
               'updated_at' => now()
         ]);

          DB::table('books')->insert([
               'title' => 'El extranjero',
               'review' => 'La obra de Camus advierte sobre el hombre que está siendo creado. Es una denuncia frente a una sociedad que olvida al individuo y le priva de un sentimiento de pertenencia activa en la comunidad. Fue premonitorio respecto al ciudadano occidental que se encontrará la sociedad tras la II Guerra Mundial.

                 Camus escribió una obra provocadora en cuyo trasfondo aparece el rostro desgarrado de una Europa herida y violentada por dos guerras mundiales. Pintó una historia gris donde el paisaje está oscurecido por la extirpación de cualquier pasión o voluntad del hombre.',
                 
                  'author_id' => 10,
               'created_at' => now(),
               'updated_at' => now()
         ]);

          DB::table('books')->insert([
               'title' => 'La hojarasca',
               'review' => 'La hojarasca es una novela corta escrita por Gabriel García Márquez, publicada en 1955. Es conocida por mostrar por primera vez Macondo, el pueblo ficticio hecho famoso en Cien años de soledad. La hojarasca es un terreno de pruebas para muchos de los temas y personajes más tarde inmortalizados en dicha obra La narración de La hojarasca cambia entre las perspectivas de tres generaciones de una familia (padre, hija y nieto), que se encuentran en un limbo espiritual luego de la muerte de un hombre odiado fuertemente por todo el pueblo, pero inexplicablemente relacionado con el patriarca de la familia.',
               
                'author_id' => 3,
               'created_at' => now(),
               'updated_at' => now()
         ]);

          DB::table('books')->insert([
               'title' => 'La zapatera prodigiosa',
               'review' => 'La zapatera prodigiosa es una obra de teatro que presenta un conflicto matrimonial: una hermosa y joven mujer se ha casado con un viejo zapatero, y es esa diferencia de edad la que origina el problema conyugal.
                La zapatera prodigiosa se estrenó en Madrid el 24 de diciembre de 1930 y es la obra que más se representó en vida de Lorca.
                Una obra de teatro se caracteriza esencialmente por el diálogo continuo entre los personajes, en este caso, entre la zapatera y su marido el zapatero, que son los personajes principales o protagonistas. Junto a ellos aparecen otros personajes secundarios: varias vecinas, diferenciadas por el color del vestido (vecina roja, morada, negra, verde, amarilla, azul), dos beatas, dos gitanillas, la sacristana, dos majas, el autor, el niño, el alcalde, don Mirlo, el mozo de la faja y el mozo del sombrero. Y con ellos un número indefinido de vecinos, beatas, curas y pueblo.' ,
                
                'author_id' => 12,
               'created_at' => now(),
               'updated_at' => now()
         ]);













        
         
    }
}
