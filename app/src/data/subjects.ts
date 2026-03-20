import type { Subject, Achievement, ConvocatoriaInfo, Question } from '@/types/ecoems';

export const subjects: Subject[] = [
  {
    id: 'hab-verbal',
    name: 'Habilidad Verbal',
    description: 'Comprensión de lectura, vocabulario y razonamiento verbal',
    icon: 'BookOpen',
    color: '#3B82F6',
    totalQuestions: 16,
    topics: [
      {
        id: 'comp-lectora',
        subjectId: 'hab-verbal',
        name: 'Comprensión Lectora',
        description: 'Técnicas para comprender y analizar textos',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'cv-1',
            front: '¿Qué es la idea principal de un texto?',
            back: 'Es el concepto central que el autor quiere transmitir. Resume el contenido esencial del párrafo o texto.',
            example: 'En un texto sobre cambio climático: "El calentamiento global es el mayor desafío ambiental del siglo XXI"'
          },
          {
            id: 'cv-2',
            front: 'Tipos de inferencias en lectura',
            back: '1. Inferencia de datos: información explícita\n2. Inferencia de causa-efecto: relaciones lógicas\n3. Inferencia de propósito: intención del autor',
            example: 'Si un texto dice "Llovió todo el día", puedes inferir que el suelo está mojado.'
          },
          {
            id: 'cv-3',
            front: 'Estrategias de lectura',
            back: '1. Skimming: lectura rápida para idea general\n2. Scanning: búsqueda de información específica\n3. Lectura profunda: análisis detallado',
            example: 'Para encontrar una fecha en un texto, usas scanning.'
          }
        ],
        questions: []
      },
      {
        id: 'vocabulario',
        subjectId: 'hab-verbal',
        name: 'Manejo de Vocabulario',
        description: 'Sinónimos, antónimos y relaciones semánticas',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'voc-1',
            front: 'Relaciones semánticas',
            back: 'Sinonimia: palabras con significado similar\nAntonimia: palabras con significado opuesto\nPolisemia: una palabra con múltiples significados',
            example: 'Sinónimos: feliz - contento. Antónimos: alto - bajo.'
          },
          {
            id: 'voc-2',
            front: 'Contexto y significado',
            back: 'El contexto determina el significado exacto de una palabra polisémica en un texto específico.',
            example: '"Banco" puede ser: institución financiera, asiento o orilla de un río.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'hab-mate',
    name: 'Habilidad Matemática',
    description: 'Sucesiones, series espaciales y razonamiento lógico-matemático',
    icon: 'Calculator',
    color: '#10B981',
    totalQuestions: 16,
    topics: [
      {
        id: 'sucesiones',
        subjectId: 'hab-mate',
        name: 'Sucesiones Numéricas',
        description: 'Patrones y regularidades en secuencias de números',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'suc-1',
            front: 'Tipos de sucesiones',
            back: 'Aritmética: suma/resta constante (2, 5, 8, 11...)\nGeométrica: multiplicación/división constante (2, 6, 18, 54...)\nCuadrática: relacionada con n² (1, 4, 9, 16...)',
            example: 'Sucesión: 3, 7, 11, 15... Diferencia: +4. Siguiente: 19'
          },
          {
            id: 'suc-2',
            front: 'Sucesiones alternadas',
            back: 'Tienen dos o más patrones intercalados. Hay que identificar cada patrón por separado.',
            example: '2, 5, 4, 10, 8, 20... (×2 y ×2 alternados con posiciones impares y pares)'
          },
          {
            id: 'suc-3',
            front: 'Sucesiones de Fibonacci',
            back: 'Cada número es la suma de los dos anteriores: 1, 1, 2, 3, 5, 8, 13, 21...',
            example: 'En naturaleza: pétalos de flores, espirales de conchas.'
          }
        ],
        questions: []
      },
      {
        id: 'series-espaciales',
        subjectId: 'hab-mate',
        name: 'Series Espaciales',
        description: 'Patrones visuales y rotaciones de figuras',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'se-1',
            front: 'Transformaciones geométricas',
            back: 'Traslación: movimiento sin rotar\nRotación: giro alrededor de un punto\nReflexión: espejo\nHomotecia: cambio de tamaño',
            example: 'Un cuadrado que gira 90° en cada paso de la serie.'
          },
          {
            id: 'se-2',
            front: 'Patrones de rotación',
            back: 'Identificar el ángulo y dirección de rotación. Común: 45°, 90°, 180° en sentido horario o antihorario.',
            example: 'Figura que rota 90° horario: ↑ → ↓ ← ↑'
          }
        ],
        questions: []
      },
      {
        id: 'imaginacion-espacial',
        subjectId: 'hab-mate',
        name: 'Imaginación Espacial',
        description: 'Visualización de figuras en 2D y 3D',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'ie-1',
            front: 'Vistas de objetos 3D',
            back: 'Vista superior: desde arriba\nVista frontal: de frente\nVista lateral: de lado\nVista isométrica: perspectiva 3D',
            example: 'Un cubo visto desde arriba muestra un cuadrado.'
          },
          {
            id: 'ie-2',
            front: 'Desarrollos planos',
            back: 'Representación 2D de una figura 3D que se puede doblar para formar el objeto.',
            example: 'Un desarrollo plano de un cubo tiene 6 cuadrados conectados.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'biologia',
    name: 'Ciencias I: Biología',
    description: 'Seres vivos, ecología, genética y evolución',
    icon: 'Leaf',
    color: '#22C55E',
    totalQuestions: 12,
    topics: [
      {
        id: 'seres-vivos',
        subjectId: 'biologia',
        name: 'Características de los Seres Vivos',
        description: 'Organización, metabolismo y reproducción',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'bio-1',
            front: 'Características de la vida',
            back: '1. Organización celular\n2. Metabolismo (anabolismo y catabolismo)\n3. Homeostasis\n4. Crecimiento y desarrollo\n5. Reproducción\n6. Respuesta a estímulos\n7. Adaptación',
            example: 'Una planta crece hacia la luz (fototropismo).'
          },
          {
            id: 'bio-2',
            front: 'Niveles de organización biológica',
            back: 'Átomo → Molécula → Orgánulo → Célula → Tejido → Órgano → Sistema → Organismo → Población → Comunidad → Ecosistema → Biosfera',
            example: 'El corazón es un órgano formado por tejido muscular.'
          }
        ],
        questions: []
      },
      {
        id: 'celula',
        subjectId: 'biologia',
        name: 'La Célula',
        description: 'Estructura y función celular',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'cel-1',
            front: 'Diferencias célula animal vs vegetal',
            back: 'Animal: sin pared celular, sin cloroplastos, lisosomas presentes, vacuolas pequeñas.\nVegetal: pared celular (celulosa), cloroplastos, vacuola grande central.',
            example: 'Las células vegetales realizan fotosíntesis gracias a los cloroplastos.'
          },
          {
            id: 'cel-2',
            front: 'Orgánulos principales',
            back: 'Núcleo: control genético\nMitocondria: respiración celular (ATP)\nRibosoma: síntesis de proteínas\nRetículo endoplásmico: transporte\nAparato de Golgi: empaquetado\nLisosoma: digestión',
            example: 'Las mitocondrias son las "centralitas" de la célula.'
          }
        ],
        questions: []
      },
      {
        id: 'fotosintesis',
        subjectId: 'biologia',
        name: 'Fotosíntesis',
        description: 'Proceso de conversión de energía lumínica',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'fot-1',
            front: 'Ecuación de la fotosíntesis',
            back: '6CO₂ + 6H₂O + luz → C₆H₁₂O₆ + 6O₂\nDióxido de carbono + agua + luz → glucosa + oxígeno',
            example: 'Las plantas liberan oxígeno durante la fotosíntesis.'
          },
          {
            id: 'fot-2',
            front: 'Fases de la fotosíntesis',
            back: 'Fase luminosa: requiere luz, ocurre en tilacoides, produce ATP y NADPH.\nFase oscura (ciclo de Calvin): no requiere luz directa, ocurre en estroma, produce glucosa.',
            example: 'En la fase luminosa se libera O₂ como subproducto.'
          }
        ],
        questions: []
      },
      {
        id: 'genetica',
        subjectId: 'biologia',
        name: 'Genética',
        description: 'Herencia y variabilidad',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'gen-1',
            front: 'Conceptos básicos de genética',
            back: 'Gen: unidad de herencia\nAlelo: variante de un gen\nGenotipo: composición genética\nFenotipo: características observables\nHomocigoto: alelos iguales\nHeterocigoto: alelos diferentes',
            example: 'Para el color de ojos: genotipo Bb (heterocigoto), fenotipo: ojos marrones.'
          },
          {
            id: 'gen-2',
            front: 'Leyes de Mendel',
            back: '1ª Ley (Segregación): los alelos se separan en la formación de gametos.\n2ª Ley (Distribución independiente): los genes de diferentes características se heredan independientemente.',
            example: 'Cruzando Aa × Aa: 25% AA, 50% Aa, 25% aa.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'fisica',
    name: 'Ciencias II: Física',
    description: 'Mecánica, energía y electricidad',
    icon: 'Zap',
    color: '#F59E0B',
    totalQuestions: 12,
    topics: [
      {
        id: 'movimiento',
        subjectId: 'fisica',
        name: 'Movimiento',
        description: 'Cinemática y tipos de movimiento',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'mov-1',
            front: 'Magnitudes del movimiento',
            back: 'Posición: ubicación en el espacio\nDesplazamiento: cambio de posición (vector)\nDistancia: trayectoria recorrida (escalar)\nVelocidad: desplazamiento/tiempo\nRapidez: distancia/tiempo\nAceleración: cambio de velocidad/tiempo',
            example: 'Si vas de A a B y regresas: desplazamiento = 0, distancia = 2×AB.'
          },
          {
            id: 'mov-2',
            front: 'Movimiento rectilíneo uniforme (MRU)',
            back: 'Velocidad constante. Fórmula: d = v × t\nGráfica posición-tiempo: línea recta\nGráfica velocidad-tiempo: línea horizontal',
            example: 'Un auto a 60 km/h recorre 120 km en 2 horas.'
          }
        ],
        questions: []
      },
      {
        id: 'leyes-newton',
        subjectId: 'fisica',
        name: 'Leyes de Newton',
        description: 'Dinámica y fuerzas',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'new-1',
            front: 'Primera Ley de Newton (Inercia)',
            back: 'Un cuerpo permanece en reposo o en movimiento rectilíneo uniforme a menos que una fuerza neta actúe sobre él.',
            example: 'Cuando un auto frena, los pasajeros se inclinan hacia adelante (inercia).'
          },
          {
            id: 'new-2',
            front: 'Segunda Ley de Newton',
            back: 'F = m × a\nLa fuerza neta es igual a la masa por la aceleración.',
            example: 'Para acelerar una masa de 10 kg a 2 m/s² se necesita F = 20 N.'
          },
          {
            id: 'new-3',
            front: 'Tercera Ley de Newton (Acción-Reacción)',
            back: 'Por cada acción hay una reacción igual y opuesta. Las fuerzas actúan sobre cuerpos diferentes.',
            example: 'Al caminar, empujas el suelo hacia atrás y el suelo te empuja hacia adelante.'
          }
        ],
        questions: []
      },
      {
        id: 'energia',
        subjectId: 'fisica',
        name: 'Energía y Trabajo',
        description: 'Formas de energía y conservación',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'en-1',
            front: 'Tipos de energía mecánica',
            back: 'Cinética: de movimiento (Ec = ½mv²)\nPotencial gravitatoria: de posición (Ep = mgh)\nPotencial elástica: de deformación (Ee = ½kx²)',
            example: 'Una pelota en lo alto de una colina tiene energía potencial.'
          },
          {
            id: 'en-2',
            front: 'Principio de conservación de la energía',
            back: 'La energía no se crea ni se destruye, solo se transforma. La energía mecánica total se conserva (sin fricción).',
            example: 'En un péndulo: Ep máxima → Ec máxima → Ep máxima.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'quimica',
    name: 'Ciencias III: Química',
    description: 'Estructura de la materia, reacciones y estequiometría',
    icon: 'FlaskConical',
    color: '#8B5CF6',
    totalQuestions: 12,
    topics: [
      {
        id: 'estructura-materia',
        subjectId: 'quimica',
        name: 'Estructura de la Materia',
        description: 'Átomos, elementos y compuestos',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'em-1',
            front: 'Partículas subatómicas',
            back: 'Protón: carga +, masa 1 u, en el núcleo\nNeutrón: carga 0, masa 1 u, en el núcleo\nElectrón: carga -, masa despreciable, en órbitas',
            example: 'El hidrógeno tiene 1 protón, 0 neutrones, 1 electrón.'
          },
          {
            id: 'em-2',
            front: 'Número atómico y másico',
            back: 'Número atómico (Z) = número de protones\nNúmero másico (A) = protones + neutrones\nIsótopos: mismo Z, diferente número de neutrones',
            example: 'Carbono-12: 6 protones, 6 neutrones. Carbono-14: 6 protones, 8 neutrones.'
          }
        ],
        questions: []
      },
      {
        id: 'tabla-periodica',
        subjectId: 'quimica',
        name: 'Tabla Periódica',
        description: 'Organización y propiedades de los elementos',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'tp-1',
            front: 'Organización de la tabla periódica',
            back: 'Períodos: filas horizontales (7)\nGrupos: columnas verticales (18)\nMetales: izquierda y centro\nNo metales: derecha\nMetaloides: escalera diagonal',
            example: 'Los metales alcalinos (Grupo 1) son muy reactivos.'
          },
          {
            id: 'tp-2',
            front: 'Propiedades periódicas',
            back: 'Radio atómico: tamaño del átomo\nElectronegatividad: atracción por electrones\nEnergía de ionización: energía para quitar un electrón',
            example: 'El fluor es el más electronegativo (4.0).'
          }
        ],
        questions: []
      },
      {
        id: 'enlaces',
        subjectId: 'quimica',
        name: 'Enlaces Químicos',
        description: 'Iónico, covalente y metálico',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'enl-1',
            front: 'Tipos de enlaces químicos',
            back: 'Iónico: transferencia de electrones (metal + no metal)\nCovalente: compartición de electrones (no metal + no metal)\nMetálico: "mar de electrones" (metal + metal)',
            example: 'NaCl: enlace iónico. H₂O: enlace covalente.'
          },
          {
            id: 'enl-2',
            front: 'Propiedades de compuestos iónicos vs covalentes',
            back: 'Iónicos: puntos de fusión/ebullición altos, conductores en disolución, sólidos cristalinos.\nCovalentes: puntos bajos, no conductores, pueden ser sólidos, líquidos o gases.',
            example: 'La sal (NaCl) tiene alto punto de fusión (801°C).'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'espanol',
    name: 'Español',
    description: 'Gramática, literatura y comprensión textual',
    icon: 'PenTool',
    color: '#EF4444',
    totalQuestions: 12,
    topics: [
      {
        id: 'gramatica',
        subjectId: 'espanol',
        name: 'Gramática',
        description: 'Categorías gramaticales y sintaxis',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'gram-1',
            front: 'Categorías gramaticales',
            back: 'Sustantivo, adjetivo, artículo, pronombre, verbo, adverbio, preposición, conjunción, interjección',
            example: '"Rápidamente" es un adverbio de modo.'
          },
          {
            id: 'gram-2',
            front: 'Funciones sintácticas',
            back: 'Sujeto: de quien se habla\nPredicado: lo que se dice del sujeto\nCD: complemento directo (sin preposición)\nCI: complemento indirecto (con a, para)\nCC: circunstancial (lugar, tiempo, modo)',
            example: 'En "Juan come manzanas": Juan = sujeto, come = verbo, manzanas = CD.'
          }
        ],
        questions: []
      },
      {
        id: 'literatura',
        subjectId: 'espanol',
        name: 'Literatura',
        description: 'Géneros, movimientos y figuras literarias',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'lit-1',
            front: 'Géneros literarios',
            back: 'Lírico: expresión de sentimientos\nNarrativo: cuenta historias (epopeya, novela, cuento)\nDramático: diálogos para representar (tragedia, comedia, drama)',
            example: 'Un soneto es género lírico. Romeo y Julieta es drama.'
          },
          {
            id: 'lit-2',
            front: 'Figuras literarias principales',
            back: 'Símil: comparación con "como"\nMetáfora: comparación sin "como"\nPersonificación: atribuir cualidades humanas\nHipérbole: exageración',
            example: '"El sol es un globo de fuego" = metáfora.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'matematicas',
    name: 'Matemáticas',
    description: 'Aritmética, álgebra, geometría y estadística',
    icon: 'FunctionSquare',
    color: '#6366F1',
    totalQuestions: 12,
    topics: [
      {
        id: 'numeros',
        subjectId: 'matematicas',
        name: 'Números y Operaciones',
        description: 'Conjuntos numéricos y operaciones',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'num-1',
            front: 'Conjuntos numéricos',
            back: 'Naturales (N): 1, 2, 3...\nEnteros (Z): ..., -2, -1, 0, 1, 2...\nRacionales (Q): fracciones p/q\nIrracionales: no expresables como fracción\nReales (R): unión de todos',
            example: '√2 es irracional. 0.5 = 1/2 es racional.'
          },
          {
            id: 'num-2',
            front: 'Ley de signos',
            back: '(+) × (+) = +\n(+) × (-) = -\n(-) × (+) = -\n(-) × (-) = +',
            example: '(-3) × (-4) = 12. (-5) × 2 = -10.'
          }
        ],
        questions: []
      },
      {
        id: 'algebra',
        subjectId: 'matematicas',
        name: 'Álgebra',
        description: 'Ecuaciones, polinomios y funciones',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'alg-1',
            front: 'Productos notables',
            back: '(a + b)² = a² + 2ab + b²\n(a - b)² = a² - 2ab + b²\n(a + b)(a - b) = a² - b²',
            example: '(x + 3)² = x² + 6x + 9'
          },
          {
            id: 'alg-2',
            front: 'Ecuación lineal',
            back: 'ax + b = 0\nSolución: x = -b/a',
            example: '2x + 6 = 0 → x = -3'
          },
          {
            id: 'alg-3',
            front: 'Ecuación cuadrática',
            back: 'ax² + bx + c = 0\nFórmula general: x = (-b ± √(b²-4ac)) / 2a',
            example: 'x² - 5x + 6 = 0 → x = 2 o x = 3'
          }
        ],
        questions: []
      },
      {
        id: 'geometria',
        subjectId: 'matematicas',
        name: 'Geometría',
        description: 'Figuras planas, cuerpos geométricos y trigonometría',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'geo-1',
            front: 'Áreas de figuras principales',
            back: 'Triángulo: A = (base × altura) / 2\nRectángulo: A = base × altura\nCírculo: A = πr²\nTrapecio: A = ((B+b) × h) / 2',
            example: 'Triángulo de base 6 y altura 4: A = 12 u²'
          },
          {
            id: 'geo-2',
            front: 'Teorema de Pitágoras',
            back: 'En un triángulo rectángulo: a² + b² = c²\ndonde c es la hipotenusa',
            example: 'Triángulo con catetos 3 y 4: hipotenusa = 5 (9+16=25)'
          },
          {
            id: 'geo-3',
            front: 'Razones trigonométricas',
            back: 'sen θ = opuesto / hipotenusa\ncos θ = adyacente / hipotenusa\ntan θ = opuesto / adyacente',
            example: 'En un triángulo 3-4-5: sen = 3/5, cos = 4/5, tan = 3/4'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'historia-mex',
    name: 'Historia de México',
    description: 'Desde la época prehispánica hasta la actualidad',
    icon: 'Landmark',
    color: '#B45309',
    totalQuestions: 8,
    topics: [
      {
        id: 'prehispanico',
        subjectId: 'historia-mex',
        name: 'México Prehispánico',
        description: 'Culturas mesoamericanas',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'pre-1',
            front: 'Culturas mesoamericanas principales',
            back: 'Olmeca: "madre cultural", cabezas colosales\nMaya: matemáticas, astronomía, escritura\nTeotihuacana: ciudad de los dioses\nMexica (Azteca): imperio en el lago de Texcoco',
            example: 'Los mayas desarrollaron el concepto del cero.'
          },
          {
            id: 'pre-2',
            front: 'Tenochtitlán',
            back: 'Fundada en 1325 sobre un lago. Capital del imperio mexica. Conquista por Cortés en 1521. Sobre ella se construyó la Ciudad de México.',
            example: 'Tenochtitlán tenía un sistema de chinampas (agricultura flotante).'
          }
        ],
        questions: []
      },
      {
        id: 'colonia',
        subjectId: 'historia-mex',
        name: 'Virreinato',
        description: 'Época colonial (1521-1821)',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'col-1',
            front: 'Organización del Virreinato',
            back: 'Virrey: representante del rey\nAudiencia: tribunal supremo\nEncomienda: sistema de trabajo forzoso\nMita: trabajo obligatorio en minas',
            example: 'La Nueva España se dividía en reinos, provincias y alcaldías.'
          },
          {
            id: 'col-2',
            front: 'Independencia de México',
            back: 'Inicio: 16 de septiembre de 1810 (Grito de Dolores, Hidalgo)\nConsumación: 27 de septiembre de 1821 (Iturbide)',
            example: 'Hidalgo, Morelos, Allende fueron líderes independentistas.'
          }
        ],
        questions: []
      },
      {
        id: 'mex-moderno',
        subjectId: 'historia-mex',
        name: 'México Contemporáneo',
        description: 'Revolución y México actual',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'mm-1',
            front: 'Revolución Mexicana',
            back: 'Inicio: 20 de noviembre de 1910 (Madero)\nFases: maderismo, convencionismo, carrancismo\nConstitución: 5 de febrero de 1917',
            example: 'Villa, Zapata, Carranza, Obregón fueron líderes revolucionarios.'
          },
          {
            id: 'mm-2',
            front: 'Principios de la Constitución de 1917',
            back: 'Art. 3: educación laica y gratuita\nArt. 27: propiedad de la tierra\nArt. 123: derechos laborales\nArt. 130: relaciones Iglesia-Estado',
            example: 'El artículo 27 permitió la reforma agraria.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'historia-univ',
    name: 'Historia Universal',
    description: 'Civilizaciones, revoluciones y conflictos mundiales',
    icon: 'Globe',
    color: '#0EA5E9',
    totalQuestions: 8,
    topics: [
      {
        id: 'edad-antigua',
        subjectId: 'historia-univ',
        name: 'Edad Antigua',
        description: 'Civilizaciones antiguas',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'ea-1',
            front: 'Civilizaciones del Antiguo Oriente',
            back: 'Mesopotamia: escritura cuneiforme, código de Hammurabi\nEgipto: jeroglíficos, pirámides, faraones\nFenicia: alfabeto, navegación',
            example: 'Los egipcios desarrollaron un calendario solar de 365 días.'
          },
          {
            id: 'ea-2',
            front: 'Grecia Antigua',
            back: 'Democracia ateniense (Pericles)\nFilosofía: Sócrates, Platón, Aristóteles\nGuerras Médicas (Grecia vs Persia)\nAlejandro Magno: expansión helénica',
            example: 'Atenas fue la cuna de la democracia directa.'
          },
          {
            id: 'ea-3',
            front: 'Roma Antigua',
            back: 'República: senado, cónsules, tribunos\nImperio: Augusto, Pax Romana\nDerecho romano: base del derecho occidental\nCaída: 476 d.C. (Odoacro)',
            example: 'Los romanos construyeron acueductos y calzadas.'
          }
        ],
        questions: []
      },
      {
        id: 'edad-media',
        subjectId: 'historia-univ',
        name: 'Edad Media',
        description: 'Feudalismo, Cruzadas y Renacimiento',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'em-1',
            front: 'Feudalismo',
            back: 'Sistema político-económico basado en la tierra.\nJerarquía: rey → señores feudales → vasallos → campesinos (siervos)',
            example: 'Los siervos trabajaban la tierra a cambio de protección.'
          },
          {
            id: 'em-2',
            front: 'Renacimiento',
            back: 'Siglo XIV-XVI, origen en Italia.\nHumanismo: valoración del ser humano.\nArte: Da Vinci, Miguel Ángel, Rafael.\nLiteratura: Dante, Petrarca, Boccaccio.',
            example: 'La Gioconda de Leonardo da Vinci es ícono del Renacimiento.'
          }
        ],
        questions: []
      },
      {
        id: 'edad-moderna',
        subjectId: 'historia-univ',
        name: 'Edad Moderna y Contemporánea',
        description: 'Revoluciones, guerras mundiales y mundo actual',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'emo-1',
            front: 'Revolución Francesa',
            back: '1789-1799. Fin del Antiguo Régimen.\nLema: "Libertad, Igualdad, Fraternidad"\nFases: Asamblea Constituyente, Convención, Directorio',
            example: 'La toma de la Bastilla (14 julio 1789) marcó el inicio.'
          },
          {
            id: 'emo-2',
            front: 'Segunda Guerra Mundial',
            back: '1939-1945\nEjes: Alemania, Italia, Japón\nAliados: Reino Unido, URSS, EE.UU., Francia\nHolocausto: genocidio judío\nFin: bombardeos atómicos en Japón (1945)',
            example: 'Día D (6 junio 1944): desembarco en Normandía.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'geografia',
    name: 'Geografía',
    description: 'Espacio geográfico, relieve y demografía',
    icon: 'Map',
    color: '#14B8A6',
    totalQuestions: 8,
    topics: [
      {
        id: 'relieve',
        subjectId: 'geografia',
        name: 'Relieve y Clima',
        description: 'Formas del terreno y climas del mundo',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'rel-1',
            front: 'Formas del relieve',
            back: 'Montañas: elevaciones mayores a 600 m\nMesetas: planicies elevadas\nLlanuras: terrenos planos y bajos\nValles: depresiones entre montañas',
            example: 'El Himalaya es la cordillera más alta del mundo.'
          },
          {
            id: 'rel-2',
            front: 'Factores del clima',
            back: 'Latitud: distancia al ecuador\nAltitud: altura sobre el nivel del mar\nDistancia al mar: continentalidad\nCorrientes marinas\nVientos predominantes',
            example: 'A mayor altitud, menor temperatura (6.5°C cada 1000 m).'
          }
        ],
        questions: []
      },
      {
        id: 'poblacion',
        subjectId: 'geografia',
        name: 'Población',
        description: 'Demografía y migraciones',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'pob-1',
            front: 'Indicadores demográficos',
            back: 'Tasa de natalidad: nacimientos por 1000 hab.\nTasa de mortalidad: muertes por 1000 hab.\nCrecimiento natural: natalidad - mortalidad\nEsperanza de vida: años promedio de vida\nÍndice de desarrollo humano (IDH)',
            example: 'México tiene una esperanza de vida de aproximadamente 75 años.'
          },
          {
            id: 'pob-2',
            front: 'Transición demográfica',
            back: 'Fase 1: alta natalidad y mortalidad\nFase 2: baja mortalidad, alta natalidad\nFase 3: baja natalidad y mortalidad\nFase 4: natalidad menor a mortalidad',
            example: 'Los países desarrollados están en fase 3 o 4.'
          }
        ],
        questions: []
      },
      {
        id: 'mexico-geo',
        subjectId: 'geografia',
        name: 'Geografía de México',
        description: 'Relieve, clima y recursos de México',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'gm-1',
            front: 'Relieve de México',
            back: 'Sierra Madre Occidental\nSierra Madre Oriental\nEje Neovolcánico\nMeseta Central\nPlanicie Costera del Pacífico y Golfo',
            example: 'El Pico de Orizaba (Citlaltépetl) es el punto más alto de México (5,636 m).'
          },
          {
            id: 'gm-2',
            front: 'Climas de México',
            back: 'Templado: centro del país\nCálido subhúmedo: costas\nSeco: norte (desiertos)\nSemicálido: altiplano\nFrío: montañas altas',
            example: 'El desierto de Sonora tiene clima seco y muy caluroso.'
          }
        ],
        questions: []
      }
    ]
  },
  {
    id: 'fce',
    name: 'Formación Cívica y Ética',
    description: 'Valores, democracia y ciudadanía',
    icon: 'Scale',
    color: '#F97316',
    totalQuestions: 12,
    topics: [
      {
        id: 'valores',
        subjectId: 'fce',
        name: 'Valores y Sociedad',
        description: 'Concepto de valores y su importancia',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'val-1',
            front: 'Definición de valor',
            back: 'Cualidad que atribuimos a las personas, acciones o cosas que consideramos dignas de aprecio, estima o respeto.',
            example: 'Honestidad, responsabilidad, solidaridad, respeto.'
          },
          {
            id: 'val-2',
            front: 'Valores universales',
            back: 'Valores compartidos por todas las culturas: dignidad humana, libertad, justicia, igualdad, solidaridad, tolerancia.',
            example: 'La Declaración Universal de Derechos Humanos (1948).'
          }
        ],
        questions: []
      },
      {
        id: 'democracia',
        subjectId: 'fce',
        name: 'Democracia',
        description: 'Sistema democrático y participación ciudadana',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'dem-1',
            front: 'Democracia: origen y significado',
            back: 'Del griego "demos" (pueblo) + "kratos" (gobierno).\nGobierno del pueblo, por el pueblo y para el pueblo.',
            example: 'Atenas fue la primera democracia directa (siglo V a.C.).'
          },
          {
            id: 'dem-2',
            front: 'Principios democráticos',
            back: 'Soberanía popular\nMayoría con respeto a minorías\nDivisión de poderes\nEstado de derecho\nPluralismo político\nParticipación ciudadana',
            example: 'En México hay división de poderes: Ejecutivo, Legislativo, Judicial.'
          }
        ],
        questions: []
      },
      {
        id: 'derechos-humanos',
        subjectId: 'fce',
        name: 'Derechos Humanos',
        description: 'Derechos fundamentales de las personas',
        progress: 0,
        completed: false,
        flashcards: [
          {
            id: 'dh-1',
            front: 'Generaciones de derechos humanos',
            back: '1ª generación: derechos civiles y políticos (libertad, igualdad)\n2ª generación: derechos económicos, sociales y culturales (trabajo, educación, salud)\n3ª generación: derechos colectivos (paz, desarrollo, medio ambiente)',
            example: 'Derecho a la vida, libertad de expresión (1ª generación).'
          },
          {
            id: 'dh-2',
            front: 'Derechos de los adolescentes',
            back: 'Derecho a la educación\nDerecho a la salud\nDerecho a la identidad\nDerecho a la integridad física y emocional\nDerecho a la opinión y expresión',
            example: 'La CNDH protege los derechos humanos en México.'
          }
        ],
        questions: []
      }
    ]
  }
];

export const achievements: Achievement[] = [
  {
    id: 'first-steps',
    name: 'Primeros Pasos',
    description: 'Completa tu primera sesión de estudio',
    icon: 'Footprints',
    condition: 'complete_first_session',
    unlocked: false,
    rarity: 'common'
  },
  {
    id: 'streak-3',
    name: 'Constancia',
    description: 'Mantén una racha de 3 días de estudio',
    icon: 'Flame',
    condition: 'streak_3_days',
    unlocked: false,
    rarity: 'common'
  },
  {
    id: 'streak-7',
    name: 'En Racha',
    description: 'Mantén una racha de 7 días de estudio',
    icon: 'Fire',
    condition: 'streak_7_days',
    unlocked: false,
    rarity: 'rare'
  },
  {
    id: 'streak-30',
    name: 'Maestro de la Disciplina',
    description: 'Mantén una racha de 30 días de estudio',
    icon: 'Crown',
    condition: 'streak_30_days',
    unlocked: false,
    rarity: 'legendary'
  },
  {
    id: 'math-wizard',
    name: 'Mago de las Matemáticas',
    description: 'Obtén 90% de aciertos en Matemáticas',
    icon: 'Calculator',
    condition: 'math_90_percent',
    unlocked: false,
    rarity: 'epic'
  },
  {
    id: 'biology-master',
    name: 'Maestro de la Biología',
    description: 'Completa todos los temas de Biología',
    icon: 'Microscope',
    condition: 'complete_biology',
    unlocked: false,
    rarity: 'rare'
  },
  {
    id: 'mock-exam-first',
    name: 'Primer Simulacro',
    description: 'Completa tu primer simulacro de examen',
    icon: 'FileCheck',
    condition: 'complete_first_mock',
    unlocked: false,
    rarity: 'common'
  },
  {
    id: 'mock-exam-excellent',
    name: 'Excelencia',
    description: 'Obtén 100 aciertos en un simulacro',
    icon: 'Trophy',
    condition: 'mock_100_correct',
    unlocked: false,
    rarity: 'epic'
  },
  {
    id: 'flashcard-collector',
    name: 'Coleccionista',
    description: 'Estudia 50 flashcards',
    icon: 'Layers',
    condition: 'study_50_flashcards',
    unlocked: false,
    rarity: 'rare'
  },
  {
    id: 'night-owl',
    name: 'Nocturno',
    description: 'Estudia después de las 10 PM',
    icon: 'Moon',
    condition: 'study_after_10pm',
    unlocked: false,
    rarity: 'common'
  },
  {
    id: 'early-bird',
    name: 'Madrugador',
    description: 'Estudia antes de las 7 AM',
    icon: 'Sun',
    condition: 'study_before_7am',
    unlocked: false,
    rarity: 'common'
  },
  {
    id: 'all-rounder',
    name: 'Todoterreno',
    description: 'Estudia al menos un tema de cada materia',
    icon: 'Target',
    condition: 'study_all_subjects',
    unlocked: false,
    rarity: 'epic'
  }
];

export const convocatoria2026: ConvocatoriaInfo = {
  year: 2026,
  registrationStart: new Date('2026-03-17'),
  registrationEnd: new Date('2026-04-14'),
  secondRegistrationStart: new Date('2026-05-15'),
  secondRegistrationEnd: new Date('2026-05-30'),
  examDate: new Date('2026-06-13'),
  resultsDate: new Date('2026-07-15'),
  modalities: [
    {
      name: 'Acceso Directo',
      description: 'Para estudiantes con promedio excelente en secundaria',
      requirements: [
        'Promedio mínimo de 9.0 en secundaria',
        'Certificado de secundaria',
        'Acta de nacimiento',
        'CURP'
      ],
      schools: ['CCH Azcapotzalco', 'CCH Naucalpan', 'CCH Vallejo', 'CCH Oriente']
    },
    {
      name: 'Con Examen (UNAM)',
      description: 'Ingreso mediante concurso de selección',
      requirements: [
        'Certificado de secundaria o constancia de estudios',
        'Acta de nacimiento',
        'CURP',
        'Fotografía digital'
      ],
      schools: ['CCH Azcapotzalco', 'CCH Naucalpan', 'CCH Vallejo', 'CCH Oriente', 'CCH Sur', 'ENP 1-9']
    },
    {
      name: 'Con Examen (IPN)',
      description: 'Ingreso a centros de estudios científicos y tecnológicos',
      requirements: [
        'Certificado de secundaria',
        'Acta de nacimiento',
        'CURP',
        'Fotografía digital'
      ],
      schools: ['CECyT 1-18', 'CET 1-8']
    },
    {
      name: 'Mixta',
      description: 'Combinación de promedio y examen',
      requirements: [
        'Promedio mínimo de 8.0',
        'Presentar examen de admisión',
        'Documentación completa'
      ],
      schools: ['Opciones UNAM e IPN']
    }
  ],
  requirements: [
    'Haber concluido la educación secundaria',
    'Contar con certificado de secundaria o constancia de estudios',
    'No haber agotado todas las oportunidades de ingreso',
    'Cumplir con los requisitos específicos de la modalidad elegida'
  ]
};

// Preguntas de ejemplo para práctica
export const sampleQuestions: Question[] = [
  {
    id: 'q1',
    topicId: 'sucesiones',
    subjectId: 'hab-mate',
    question: '¿Cuál es el siguiente número en la sucesión: 2, 6, 12, 20, 30, ?',
    options: ['38', '40', '42', '44'],
    correctAnswer: 2,
    explanation: 'La diferencia entre términos aumenta en 2: +4, +6, +8, +10, +12. Por tanto: 30 + 12 = 42',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'q2',
    topicId: 'comp-lectora',
    subjectId: 'hab-verbal',
    question: 'Lee: "El cambio climático es uno de los mayores desafíos de la humanidad. Las temperaturas globales han aumentado 1.1°C desde la era preindustrial." ¿Cuál es la idea principal?',
    options: [
      'La temperatura ha subido 1.1°C',
      'El cambio climático es un gran desafío para la humanidad',
      'La era preindustrial fue hace mucho tiempo',
      'Las temperaturas siempre han subido'
    ],
    correctAnswer: 1,
    explanation: 'La idea principal resume el mensaje central: el cambio climático como desafío mayor.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'q3',
    topicId: 'fotosintesis',
    subjectId: 'biologia',
    question: '¿Cuál es el producto principal de la fase luminosa de la fotosíntesis?',
    options: ['Glucosa', 'ATP y NADPH', 'Dióxido de carbono', 'Agua'],
    correctAnswer: 1,
    explanation: 'La fase luminosa produce ATP y NADPH, que se usan en la fase oscura para producir glucosa.',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'q4',
    topicId: 'leyes-newton',
    subjectId: 'fisica',
    question: 'Según la segunda ley de Newton, si una fuerza de 20 N actúa sobre una masa de 4 kg, ¿cuál es la aceleración?',
    options: ['2 m/s²', '4 m/s²', '5 m/s²', '16 m/s²'],
    correctAnswer: 2,
    explanation: 'F = m × a → a = F/m = 20/4 = 5 m/s²',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'q5',
    topicId: 'enlaces',
    subjectId: 'quimica',
    question: '¿Qué tipo de enlace se forma entre el sodio (Na) y el cloro (Cl)?',
    options: ['Covalente', 'Iónico', 'Metálico', 'Puente de hidrógeno'],
    correctAnswer: 1,
    explanation: 'El Na (metal) transfiere un electrón al Cl (no metal), formando un enlace iónico.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'q6',
    topicId: 'algebra',
    subjectId: 'matematicas',
    question: 'Resuelve: x² - 5x + 6 = 0',
    options: ['x = 2, x = 3', 'x = -2, x = -3', 'x = 1, x = 6', 'x = -1, x = -6'],
    correctAnswer: 0,
    explanation: 'Factorizando: (x-2)(x-3) = 0 → x = 2 o x = 3',
    difficulty: 'medium',
    type: 'multiple_choice'
  },
  {
    id: 'q7',
    topicId: 'revolucion',
    subjectId: 'historia-mex',
    question: '¿En qué fecha comenzó la Revolución Mexicana?',
    options: ['16 de septiembre de 1810', '5 de mayo de 1862', '20 de noviembre de 1910', '27 de septiembre de 1821'],
    correctAnswer: 2,
    explanation: 'La Revolución Mexicana comenzó el 20 de noviembre de 1910, convocada por Francisco I. Madero.',
    difficulty: 'easy',
    type: 'multiple_choice'
  },
  {
    id: 'q8',
    topicId: 'derechos-humanos',
    subjectId: 'fce',
    question: '¿En qué documento se establecen los derechos humanos universales?',
    options: [
      'Constitución Mexicana de 1917',
      'Declaración de Independencia de EE.UU.',
      'Declaración Universal de Derechos Humanos de 1948',
      'Carta Magna de 1215'
    ],
    correctAnswer: 2,
    explanation: 'La Declaración Universal de Derechos Humanos fue adoptada por la ONU en 1948.',
    difficulty: 'easy',
    type: 'multiple_choice'
  }
];
