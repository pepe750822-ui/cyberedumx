// Preguntas basadas en la Guía Oficial ECOEMS 2025
import type { Question } from '@/types/ecoems';

export const examQuestions: Question[] = [
  // HABILIDAD MATEMÁTICA - De la guía oficial
  {
    id: 'hm-1',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: 'Encuentra el número que falta en la sucesión: 49, 62, 77, ___, 113, 134, ...',
    options: ['99', '104', '94', '100'],
    correctAnswer: 2, // C) 94
    explanation: 'La sucesión aumenta: +13, +15, +17, +19, +21... El número faltante es 77 + 17 = 94',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hm-2',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: 'Identifica el número que continúa en la sucesión: –100, –10, –1, ___',
    options: ['–0.01', '–0.1', 'x0.01', 'x0.1'],
    correctAnswer: 1, // B) -0.1
    explanation: 'La sucesión divide entre 10 cada vez: –100÷10=–10, –10÷10=–1, –1÷10=–0.1',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hm-3',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: 'Los números de la sucesión 3, 7, 11, 15, 19, ... se incrementan de cuatro en cuatro. Los números de la sucesión 1, 8, 15, 22, 29, ... se incrementan de siete en siete. El número 15 es común en ambas sucesiones. ¿Cuál es el próximo número común?',
    options: ['23', '24', '36', '43'],
    correctAnswer: 3, // D) 43
    explanation: 'El mínimo común múltiplo de 4 y 7 es 28. 15 + 28 = 43',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hm-4',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: '¿Qué números continúan en la sucesión? 1, 2, 3, 4, 5, 8, ___',
    options: ['7, 16', '9, 15', '11, 14', '8, 11'],
    correctAnswer: 0, // A) 7, 16
    explanation: 'Hay dos sucesiones intercaladas: posiciones impares (1, 3, 5, 7...) y posiciones pares (2, 4, 8, 16...) que duplica',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hm-5',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: 'Identifica el número que continúa en la siguiente serie: 3, 5, 9, 17, 33, 65, ___',
    options: ['129', '89', '99', '79'],
    correctAnswer: 0, // A) 129
    explanation: 'La diferencia entre términos se duplica: +2, +4, +8, +16, +32, +64. 65 + 64 = 129',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hm-6',
    topicId: 'problemas',
    subjectId: 'hab-mate',
    question: 'En una granja donde sólo hay caballos y gallinas, el dueño cuenta 116 patas y 37 cabezas. ¿Cuántos animales hay de cada tipo?',
    options: ['19 caballos y 18 gallinas', '21 caballos y 16 gallinas', '16 caballos y 21 gallinas', '20 caballos y 17 gallinas'],
    correctAnswer: 1, // B) 21 caballos y 16 gallinas
    explanation: 'Si x = caballos (4 patas) e y = gallinas (2 patas): x + y = 37, 4x + 2y = 116. Resolviendo: x = 21, y = 16',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hm-7',
    topicId: 'problemas',
    subjectId: 'hab-mate',
    question: 'La suma de dos números es 22 y su producto es 57. Indica cuáles son esos números.',
    options: ['11, 11', '9, 13', '3, 19', '5, 17'],
    correctAnswer: 2, // C) 3, 19
    explanation: '3 + 19 = 22 y 3 × 19 = 57',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hm-8',
    topicId: 'problemas',
    subjectId: 'hab-mate',
    question: 'Considerando que el número de bacterias en cierto cultivo se duplica cada tres minutos, si hay 28 bacterias a las 9:00 am, ¿a qué hora habrá 224?',
    options: ['9:30 am', '9:15 am', '9:03 pm', '9:09 am'],
    correctAnswer: 3, // D) 9:09 am
    explanation: '28→56→112→224. Se duplicó 3 veces: 3 × 3 = 9 minutos. 9:00 + 9 min = 9:09 am',
    difficulty: 'medium',
    type: 'multiple_choice'
  },

  // BIOLOGÍA - De la guía oficial
  {
    id: 'bio-1',
    topicId: 'seres-vivos',
    subjectId: 'biologia',
    question: 'Todos los seres vivos poseen una estructura denominada:',
    options: ['tejido', 'núcleo', 'célula', 'desmosoma'],
    correctAnswer: 2, // C) célula
    explanation: 'La célula es la unidad básica de todos los seres vivos (teoría celular).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'bio-2',
    topicId: 'ecologia',
    subjectId: 'biologia',
    question: 'En México diariamente se pierde un número importante de especies debido a la acción del hombre. ¿Cuál de estas actividades pone en riesgo la biodiversidad?',
    options: ['Introducción de especies exóticas', 'Incendios provocados', 'Ecoturismo', 'Caza deportiva'],
    correctAnswer: 1, // B) Incendios provocados
    explanation: 'Los incendios provocados destruyen hábitats y ponen en riesgo la biodiversidad.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-3',
    topicId: 'ecologia',
    subjectId: 'biologia',
    question: 'La estrategia que se propone para que las generaciones actuales se comprometan con el mantenimiento de los recursos naturales y garanticen su satisfacción en el futuro se denomina:',
    options: ['Desarrollo sustentable', 'Mejoramiento del cultivo intensivo', 'Desarrollo biotecnológico', 'Revolución verde'],
    correctAnswer: 0, // A) Desarrollo sustentable
    explanation: 'El desarrollo sustentable busca satisfacer las necesidades presentes sin comprometer las de las futuras generaciones.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'bio-4',
    topicId: 'biotecnologia',
    subjectId: 'biologia',
    question: 'La producción industrial de ________ representa un avance en ciencia y tecnología para la salud humana.',
    options: ['sacarosa', 'colágeno', 'insulina', 'almidón'],
    correctAnswer: 2, // C) insulina
    explanation: 'La insulina producida mediante ingeniería genética (bacterias) revolucionó el tratamiento de la diabetes.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-5',
    topicId: 'fotosintesis',
    subjectId: 'biologia',
    question: 'A través de la ________ algunos organismos autótrofos transforman la energía luminosa en energía química liberando oxígeno.',
    options: ['regulación', 'fotosíntesis', 'respiración', 'oxidación'],
    correctAnswer: 1, // B) fotosíntesis
    explanation: 'La fotosíntesis es el proceso por el cual las plantas convierten luz en energía química (glucosa) y liberan O₂.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'bio-6',
    topicId: 'metabolismo',
    subjectId: 'biologia',
    question: 'Es la suma de reacciones químicas en la célula, donde se utilizan moléculas alimenticias para transferir su energía al ATP.',
    options: ['Fotosíntesis', 'Respiración', 'Homeostasis', 'Anabolismo'],
    correctAnswer: 1, // B) Respiración
    explanation: 'La respiración celular descompone glucosa para producir ATP (energía).',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-7',
    topicId: 'ciclos-biogeoquimicos',
    subjectId: 'biologia',
    question: 'Dentro del ciclo del carbono, la ________ permite la fijación de este elemento de la atmósfera a la biósfera; mientras que, en sentido contrario, la liberación de este elemento de la biósfera a la atmósfera se lleva a cabo por la ________.',
    options: ['fotosíntesis – respiración', 'fermentación – fotosíntesis', 'respiración – fotosíntesis', 'fotosíntesis – quimiosíntesis'],
    correctAnswer: 0, // A) fotosíntesis - respiración
    explanation: 'La fotosíntesis fija CO₂ (atmósfera → biosfera) y la respiración libera CO₂ (biosfera → atmósfera).',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-8',
    topicId: 'nutricion',
    subjectId: 'biologia',
    question: 'La anemia es una enfermedad causada por la falta de hierro; por ello, una acción que debe realizarse para proveer al cuerpo de este mineral es:',
    options: ['consumir alimentos con vitamina C', 'consumir abundantes lípidos', 'tener una dieta equilibrada', 'tomar diariamente dos litros de agua'],
    correctAnswer: 2, // C) tener una dieta equilibrada
    explanation: 'Una dieta equilibrada proporciona todos los nutrientes necesarios incluyendo hierro.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'bio-9',
    topicId: 'salud',
    subjectId: 'biologia',
    question: 'Para prevenir enfermedades respiratorias causadas por la contaminación ambiental, es recomendable:',
    options: ['evitar sitios con aglomeraciones', 'protegerse cerrando puertas y ventanas', 'utilizar sistema de calefacción', 'eludir el consumo de líquidos en abundancia'],
    correctAnswer: 0, // A) evitar sitios con aglomeraciones
    explanation: 'Evitar aglomeraciones reduce la exposición a contaminantes y agentes infecciosos.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'bio-10',
    topicId: 'reproduccion',
    subjectId: 'biologia',
    question: 'Tipo de reproducción que disminuye los riesgos de extinción.',
    options: ['Externa', 'Interna', 'Sexual', 'Asexual'],
    correctAnswer: 2, // C) Sexual
    explanation: 'La reproducción sexual genera variabilidad genética que ayuda a la especie a adaptarse y sobrevivir.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-11',
    topicId: 'ets',
    subjectId: 'biologia',
    question: 'Al igual que el SIDA, ¿cuál de estas enfermedades de transmisión sexual (ETS) es causada por un virus?',
    options: ['Sífilis', 'Candidiasis', 'Gonorrea', 'Papiloma humano'],
    correctAnswer: 3, // D) Papiloma humano
    explanation: 'El VPH (virus del papiloma humano) y el VIH (SIDA) son enfermedades virales de transmisión sexual.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'bio-12',
    topicId: 'genetica',
    subjectId: 'biologia',
    question: 'Son unidades que se ubican en los cromosomas, específicamente en el sitio denominado locus.',
    options: ['Genes', 'Centrómeros', 'Nucleótidos', 'Intrones'],
    correctAnswer: 0, // A) Genes
    explanation: 'Los genes son segmentos de ADN ubicados en posiciones específicas (locus) de los cromosomas.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },

  // ESPAÑOL - De la guía oficial
  {
    id: 'esp-1',
    topicId: 'bibliografia',
    subjectId: 'espanol',
    question: 'Las fichas bibliográficas sirven para:',
    options: ['localizar y conservar información', 'enumerar y jerarquizar oraciones', 'citar y ordenar párrafos', 'recopilar y organizar ideas'],
    correctAnswer: 0, // A) localizar y conservar información
    explanation: 'Las fichas bibliográficas registran fuentes para poder localizarlas posteriormente.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'esp-2',
    topicId: 'comprension',
    subjectId: 'espanol',
    question: 'Analiza los siguientes párrafos y señala cuál plantea el asunto del texto expositivo sobre la biología.',
    options: ['IV', 'I', 'II', 'III'],
    correctAnswer: 2, // C) II
    explanation: 'El párrafo II presenta la definición y desarrollo histórico de la biología como ciencia.',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'esp-3',
    topicId: 'nexos',
    subjectId: 'espanol',
    question: 'Elige las oraciones que usan nexos que introducen ideas: I. Rubén Darío, creador del modernismo, cultivó diversos géneros literarios, por ejemplo poesía y cuento. II. Fue Juan Valera, autor realista, el encargado de difundir el modernismo en España. III. Los autores de la Generación del 98, además de grandes críticos, fueron poetas consagrados. IV. La Generación del 98 reconoce su nacimiento con la invasión de Estados Unidos a tres colonias españolas. V. Entre los autores modernistas en México están Salvador Díaz Mirón, Ramón López Velarde y Manuel Gutiérrez Nájera.',
    options: ['I y III', 'II y IV', 'II y V', 'III y V'],
    correctAnswer: 0, // A) I y III
    explanation: '"Por ejemplo" (I) y "además" (III) son nexos que introducen ideas adicionales.',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'esp-4',
    topicId: 'nexos',
    subjectId: 'espanol',
    question: 'Selecciona el enunciado cuyo nexo sirve para encadenar argumentos.',
    options: ['Trabaja para pagar sus estudios', 'Es demasiado inteligente, pero flojo', 'Es indudable que tiene miedo', 'Es tan terco que todo le sale mal'],
    correctAnswer: 2, // C) Es indudable que tiene miedo
    explanation: '"Es indudable que" introduce una afirmación que encadena un argumento.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'esp-5',
    topicId: 'jerarquizacion',
    subjectId: 'espanol',
    question: 'Selecciona el enunciado que expresa una jerarquización.',
    options: ['Es indispensable que termines el ensayo de literatura mexicana', 'El italiano como el francés son lenguas romances', 'La razón más importante por la que estudio es para ganar una beca', 'No logro agradarte por más que me esfuerce'],
    correctAnswer: 2, // C) La razón más importante...
    explanation: '"La razón más importante" jerarquiza las razones de estudio.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'esp-6',
    topicId: 'puntuacion',
    subjectId: 'espanol',
    question: 'Función que desempeñan la coma y el punto y seguido en el siguiente párrafo: "Presten atención a las indicaciones, debemos resolver todo con eficacia. Ustedes lograrán resolver el problema planteado, todos con disposición y responsabilidad aportarán soluciones."',
    options: ['Destacar complementos', 'Separar oraciones', 'Delimitar vocativos', 'Citar enumeraciones'],
    correctAnswer: 1, // B) Separar oraciones
    explanation: 'La coma y el punto y seguido separan oraciones dentro del párrafo.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'esp-7',
    topicId: 'tipos-texto',
    subjectId: 'espanol',
    question: '¿A qué tipo de texto corresponde el siguiente ejemplo sobre el asombro? "El asombro forma parte de la naturaleza humana, es el impulso que conduce a descubrir el entorno..."',
    options: ['Poético', 'Literario', 'Filosófico', 'Histórico'],
    correctAnswer: 2, // C) Filosófico
    explanation: 'El texto reflexiona sobre el concepto del asombro de manera filosófica.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'esp-8',
    topicId: 'categorias-gramaticales',
    subjectId: 'espanol',
    question: 'Identifica el tema principal del siguiente cuadro sinóptico: (Sustantivo, Adjetivo, Verbo, Adverbio, Pronombre, Preposición, Conjunción, Interjección, Artículo)',
    options: ['Categoría semántica', 'Enunciado bimembre', 'Categoría gramatical', 'Enunciado unimembre'],
    correctAnswer: 2, // C) Categoría gramatical
    explanation: 'El cuadro muestra las categorías gramaticales (partes de la oración).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },

  // QUÍMICA - De la guía oficial
  {
    id: 'quim-1',
    topicId: 'gases',
    subjectId: 'quimica',
    question: 'Son dos propiedades físicas de los gases.',
    options: ['Difusibilidad y volumen propio', 'Volumen definido y maleabilidad', 'Volumen y forma indefinida', 'Forma indefinida y maleabilidad'],
    correctAnswer: 2, // C) Volumen y forma indefinida
    explanation: 'Los gases no tienen forma ni volumen definido (adoptan los del recipiente).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-2',
    topicId: 'propiedades',
    subjectId: 'quimica',
    question: '¿Qué propiedades extensivas te permiten cuantificar los materiales?',
    options: ['Masa y volumen', 'Temperatura y densidad', 'Densidad y solubilidad', 'Masa y solubilidad'],
    correctAnswer: 0, // A) Masa y volumen
    explanation: 'Las propiedades extensivas dependen de la cantidad de materia (masa, volumen).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-3',
    topicId: 'ecuaciones-quimicas',
    subjectId: 'quimica',
    question: 'Identifica la propiedad que se conserva en la siguiente ecuación química: N₂(g) + 3H₂(g) → 2NH₃(g) + 92.4kJ',
    options: ['Temperatura', 'Masa', 'Volumen', 'Presión'],
    correctAnswer: 1, // B) Masa
    explanation: 'Según la ley de conservación de la masa, la masa se conserva en una reacción química.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'quim-4',
    topicId: 'mezclas',
    subjectId: 'quimica',
    question: 'Cuando en un recipiente se ponen en contacto dos sustancias A y B se observa que ambas pierden sus propiedades originales, además de que ya no pueden separarse por medios físicos. Esto indica que A y B han formado:',
    options: ['un compuesto', 'una mezcla heterogénea', 'un elemento', 'una mezcla homogénea'],
    correctAnswer: 0, // A) un compuesto
    explanation: 'Cuando dos sustancias reaccionan químicamente forman un compuesto con nuevas propiedades.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'quim-5',
    topicId: 'estructura-atomica',
    subjectId: 'quimica',
    question: 'Los electrones externos de los átomos determinan:',
    options: ['el tamaño del átomo', 'su estado de agregación', 'el número de orbitales', 'su capacidad de combinación'],
    correctAnswer: 3, // D) su capacidad de combinación
    explanation: 'Los electrones de valencia determinan cómo se combinan los átomos (enlaces químicos).',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'quim-6',
    topicId: 'estructura-atomica',
    subjectId: 'quimica',
    question: 'El sodio Na, con número atómico 11 y número de masa 23 tiene ________ protones y ________ neutrones.',
    options: ['11 – 12', '11 – 23', '12 – 11', '23 – 11'],
    correctAnswer: 0, // A) 11 - 12
    explanation: 'Protones = número atómico = 11. Neutrones = número de masa - protones = 23 - 11 = 12.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-7',
    topicId: 'enlaces',
    subjectId: 'quimica',
    question: 'Al formarse la sal cloruro de sodio (NaCl), el sodio transfiere un electrón al cloro. ¿Qué tipo de enlace presentan?',
    options: ['Covalente polar', 'Iónico', 'Covalente no polar', 'Metálico'],
    correctAnswer: 1, // B) Iónico
    explanation: 'El enlace iónico se forma por transferencia de electrones de un metal a un no metal.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-8',
    topicId: 'cambios-quimicos',
    subjectId: 'quimica',
    question: 'Elige la opción correspondiente a un cambio químico con base en la diferencia que hay entre las propiedades de productos y reactivos.',
    options: ['Un resorte se estira cuando se jala', 'Un papel se quema al exponerlo al fuego', 'La sal se disuelve en agua', 'El yodo se sublima al ser calentado'],
    correctAnswer: 1, // B) Un papel se quema
    explanation: 'La combustión del papel es un cambio químico (nuevas sustancias: CO₂, H₂O, cenizas).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-9',
    topicId: 'reacciones-quimicas',
    subjectId: 'quimica',
    question: '¿Qué compuesto sólido se produce durante la siguiente reacción? Ca(s) + 2H₂O(l) → Ca(OH)₂(s) + H₂(g)',
    options: ['Ca', 'H₂O', 'Ca(OH)₂', 'H₂'],
    correctAnswer: 2, // C) Ca(OH)₂
    explanation: 'Ca(OH)₂ (hidróxido de calcio) es el producto sólido indicado con (s).',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'quim-10',
    topicId: 'acidos-bases',
    subjectId: 'quimica',
    question: 'Sustancia de sabor agrio, que cambia el papel tornasol a rojo.',
    options: ['Sosa cáustica', 'Limpiador para pisos', 'Detergente', 'Vinagre'],
    correctAnswer: 3, // D) Vinagre
    explanation: 'El vinagre (ácido acético) es un ácido con sabor agrio que torna rojo el papel tornasol.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },

  // HISTORIA - De la guía oficial
  {
    id: 'hist-1',
    topicId: 'expansion-europea',
    subjectId: 'historia-univ',
    question: 'Principales causas de la expansión de Europa durante el siglo XVI.',
    options: [
      'Los avances científicos y tecnológicos, el abaratamiento de los productos de Asia y el fortalecimiento del feudalismo',
      'La caída de Constantinopla, la necesidad de nuevas rutas con Asia y la consolidación de las monarquías nacionales',
      'El aumento de la actividad comercial, el dominio político de la Iglesia católica y la promoción de nuevas ideas eclesiásticas',
      'El auge del Humanismo y la burguesía, la aparición de nuevas ideas sobre la forma de la tierra y el deseo europeo de conquista'
    ],
    correctAnswer: 1, // B) Caída de Constantinopla...
    explanation: 'La caída de Constantinopla (1453) obligó a buscar nuevas rutas comerciales con Asia.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hist-2',
    topicId: 'revolucion-industrial',
    subjectId: 'historia-univ',
    question: 'Proceso que dio como resultado el crecimiento de las ciudades en Alemania, Estados Unidos e Inglaterra durante el siglo XIX.',
    options: ['Revolución Industrial', 'Imperialismo', 'Liberalismo económico', 'Mercantilismo'],
    correctAnswer: 0, // A) Revolución Industrial
    explanation: 'La Revolución Industrial provocó la urbanización masiva en estos países.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'hist-3',
    topicId: 'primera-guerra',
    subjectId: 'historia-univ',
    question: 'La guerra de Trincheras es una etapa del desarrollo de la:',
    options: ['Primera Guerra Mundial', 'guerra ruso-japonesa', 'guerra franco-prusiana', 'Segunda Guerra Mundial'],
    correctAnswer: 0, // A) Primera Guerra Mundial
    explanation: 'La guerra de trincheras caracterizó el frente occidental de la Primera Guerra Mundial.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'hist-4',
    topicId: 'entreguerras',
    subjectId: 'historia-univ',
    question: 'Relaciona cada país con la ideología de la época de entreguerras que en él surgió: I. Alemania, II. Rusia, III. Italia. a. Socialismo, b. Fascismo, c. Nacional-Socialismo',
    options: ['I: a – II: b – III: c', 'I: b – II: c – III: a', 'I: c – II: b – III: a', 'I: c – II: a – III: b'],
    correctAnswer: 3, // D) I:c, II:a, III:b
    explanation: 'Alemania: Nacional-Socialismo, Rusia: Socialismo, Italia: Fascismo.',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hist-5',
    topicId: 'segunda-guerra',
    subjectId: 'historia-univ',
    question: 'Suceso que da inicio a la etapa final de la Segunda Guerra Mundial, que culminó con la ocupación de Berlín y la derrota de Alemania.',
    options: ['Ataque japonés a Pearl Harbor', 'Ofensiva de la Unión Soviética', 'Ataque nuclear a Japón', 'Desembarco de Normandía'],
    correctAnswer: 3, // D) Desembarco de Normandía
    explanation: 'El Día D (6 de junio de 1944) marcó el inicio de la liberación de Europa occidental.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hist-6',
    topicId: 'mexico-contemporaneo',
    subjectId: 'historia-mex',
    question: 'Máximo tribunal de la Corona española en el virreinato de la Nueva España.',
    options: ['Cabildos', 'Intendencias', 'Consejo de Indias', 'Real Audiencia'],
    correctAnswer: 3, // D) Real Audiencia
    explanation: 'La Real Audiencia era el tribunal supremo de justicia en el virreinato.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hist-7',
    topicId: 'independencia-mexico',
    subjectId: 'historia-mex',
    question: 'La restauración de la Constitución de Cádiz en España contribuyó a la consumación de la Independencia de México porque:',
    options: [
      'la Corona española licenció las tropas de la Nueva España',
      'el ejército y la Iglesia temían que las nuevas cortes abolieran sus fueros',
      'en este contexto surgió el plan independentista de Agustín de Iturbide',
      'los insurgentes que habían sido encarcelados fueron liberados'
    ],
    correctAnswer: 2, // C) Plan de Iturbide
    explanation: 'El Plan de Iguala (Iturbide) surgió en este contexto y llevó a la independencia.',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hist-8',
    topicId: 'porfiriato',
    subjectId: 'historia-mex',
    question: 'El Partido Liberal Mexicano fue un decidido opositor al régimen:',
    options: ['maderista', 'porfirista', 'huertista', 'juarista'],
    correctAnswer: 1, // B) porfirista
    explanation: 'El PLM (con Ricardo Flores Magón) se opuso al régimen de Porfirio Díaz.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hist-9',
    topicId: 'guerra-cristera',
    subjectId: 'historia-mex',
    question: 'Los cristeros criticaron a Plutarco Elías Calles por la aplicación del artículo 3º constitucional, ya que:',
    options: [
      'redujo el papel social de la Iglesia al aspecto espiritual',
      'reconoció la amplia diversidad cultural y de creencias de los pueblos indígenas',
      'canceló los derechos jurídicos y de propiedad al clero',
      'negó a la Iglesia la posibilidad de proveer de educación pública a la sociedad'
    ],
    correctAnswer: 3, // D) educación pública
    explanation: 'El artículo 3º estableció la educación laica, quitando a la Iglesia su rol educativo.',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'hist-10',
    topicId: 'literatura-mexicana',
    subjectId: 'historia-mex',
    question: 'Son autores mexicanos del siglo XX, cuyas obras han sido de gran aporte cultural.',
    options: [
      'Joaquín Fernández de Lizardi y Guillermo Prieto',
      'Francisco Zarco y Justo Sierra',
      'Octavio Paz y Carlos Fuentes',
      'Francisco Xavier Clavijero y Fernando Alva Ixtlixóchitl'
    ],
    correctAnswer: 2, // C) Octavio Paz y Carlos Fuentes
    explanation: 'Octavio Paz (Premio Nobel) y Carlos Fuentes son destacados escritores mexicanos del siglo XX.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'hist-11',
    topicId: 'neoliberalismo',
    subjectId: 'historia-mex',
    question: 'La desincorporación de entidades públicas es una de las características propias del:',
    options: ['populismo', 'estado de bienestar', 'neoliberalismo', 'corporativismo'],
    correctAnswer: 2, // C) neoliberalismo
    explanation: 'El neoliberalismo promueve la privatización de empresas estatales.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'hist-12',
    topicId: 'siglo-xxi',
    subjectId: 'historia-univ',
    question: 'Avance tecnológico que revolucionó la educación en el siglo XXI.',
    options: ['televisión educativa', 'pizarrón blanco', 'libros impresos', 'Internet'],
    correctAnswer: 3, // D) Internet
    explanation: 'Internet ha transformado radicalmente el acceso a la información y la educación.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },

  // MATEMÁTICAS - De la guía oficial
  {
    id: 'mat-1',
    topicId: 'operaciones',
    subjectId: 'matematicas',
    question: 'Resuelve la siguiente operación: 2 × [1850 – (–1250)] ÷ 5 =',
    options: ['–1240', '1240', '990', '–990'],
    correctAnswer: 1, // B) 1240
    explanation: '2 × [1850 + 1250] ÷ 5 = 2 × 3100 ÷ 5 = 6200 ÷ 5 = 1240',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'mat-2',
    topicId: 'porcentajes',
    subjectId: 'matematicas',
    question: 'Juan decidió vender dulces y para comenzar invirtió $900 pesos. ¿Cuál habrá sido su venta si su ganancia fue del 10%?',
    options: ['$100', '$990', '$90', '$1,000'],
    correctAnswer: 1, // B) $990
    explanation: 'Venta = Inversión + Ganancia = $900 + ($900 × 0.10) = $900 + $90 = $990',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'mat-3',
    topicId: 'porcentajes',
    subjectId: 'matematicas',
    question: 'Una alberca se llena en 10 horas y se vacía en 6 horas. Si se llena durante 8 horas y después la vaciamos durante 1 hora. Indica qué porcentaje de la alberca está lleno.',
    options: ['96.6%', '85%', '63.3%', '90%'],
    correctAnswer: 2, // C) 63.3%
    explanation: 'En 8 horas se llena 8/10 = 80%. En 1 hora se vacía 1/6 = 16.7%. Total: 80% - 16.7% = 63.3%',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'mat-4',
    topicId: 'algebra',
    subjectId: 'matematicas',
    question: 'Determina el área de una caja sin tapa con base cuadrada (lado x) y una altura de 6 cm.',
    options: ['6x²', 'x² + 24x', 'x² + 12x', '2x² + 24x'],
    correctAnswer: 1, // B) x² + 24x
    explanation: 'Área = base + 4 lados = x² + 4(x)(6) = x² + 24x',
    difficulty: 'hard',
    type: 'multiple_choice'
  },
  {
    id: 'mat-5',
    topicId: 'ecuaciones',
    subjectId: 'matematicas',
    question: 'En un Club, el costo de la membresía anual es de $900.00 y el acceso al gimnasio, $30.00 por hora. Si Pedro dispone de $1,500.00 para inscribirse y gastar en el club durante un año, ¿cuántas horas podría ejercitar en el gimnasio?',
    options: ['20', '13', '80', '50'],
    correctAnswer: 0, // A) 20
    explanation: '($1500 - $900) ÷ $30 = $600 ÷ $30 = 20 horas',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'mat-6',
    topicId: 'algebra',
    subjectId: 'matematicas',
    question: 'Si un cuadrado mide 2x + 5 en cada uno de sus lados, ¿cuál de las siguientes expresiones representa el área de dicho cuadrado?',
    options: ['2x² – 20x + 25', '4x² – 25', '4x² + 20x + 25', '4x² + 25'],
    correctAnswer: 2, // C) 4x² + 20x + 25
    explanation: '(2x + 5)² = 4x² + 20x + 25 (producto notable)',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'mat-7',
    topicId: 'proporcionalidad',
    subjectId: 'matematicas',
    question: 'Tres integrantes de una familia contribuyen anualmente con $102,000 al gasto familiar. Si sus edades son 20, 22 y 26 años y su aportación individual es directamente proporcional a su edad, determina la cantidad que aporta cada uno.',
    options: [
      'El de 20 años aporta $30,000, el de 22 años aporta $39,000 y el de 26 años aporta $33,000',
      'El de 20 años aporta $33,000, el de 22 años aporta $30,000 y el de 26 años aporta $39,000',
      'El de 20 años aporta $30,000, el de 22 años aporta $33,000 y el de 26 años aporta $39,000',
      'El de 20 años aporta $39,000, el de 22 años aporta $33,000 y el de 26 años aporta $30,000'
    ],
    correctAnswer: 2, // C) 30,000; 33,000; 39,000
    explanation: 'Suma de edades = 68. 20/68 × 102000 = 30000, 22/68 × 102000 = 33000, 26/68 × 102000 = 39000',
    difficulty: 'hard',
    type: 'multiple_choice'
  }
];

// Exportar preguntas por materia para los simulacros
export const getQuestionsBySubject = (subjectId: string): Question[] => {
  return examQuestions.filter(q => q.subjectId === subjectId);
};

// Obtener preguntas aleatorias para simulacro
export const getRandomQuestions = (count: number = 20): Question[] => {
  const shuffled = [...examQuestions].sort(() => Math.random() - 0.5);
  return shuffled.slice(0, count);
};
