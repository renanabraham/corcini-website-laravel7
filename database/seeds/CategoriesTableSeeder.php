<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CATEGORIAS PRINCIPAIS

        $title1 = 'Restauração capilar: transplante FUE e intradermoterapia capilar';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => 'Restauração Capilar',
            'title' => $title1,
            'slug' => Str::slug($title1),
            'subtitle' => 'Tratamentos capilares totalmente indolores e sem cicatrizes',
            'order' => 1,
            'headline' => 'OS PROCEDIMENTOS NA MEDICINA PARA A RESTAURAÇÃO CAPILAR ESTÃO CADA VEZ
MAIS MODERNOS COM O USO DE TECNOLOGIAS DE PONTA, OS QUAIS VISAM A
MELHORA DA AUTOESTIMA COM O MÁXIMO CONFORTO E RESULTADO NATURAL PARA
OS PACIENTES.',
            'p1' => '<p>Uma queda normal de cabelo é em média de 150 fios por dia, acima disso, é classificada
como alopecia. No início da alopecia, perda acentuada dos fios, temos a possibilidade de
reversão com o tratamento de Intradermoterapia Capilar. Essa técnica consiste na
aplicação de medicamentos diretamente no couro cabeludo, através de pequenas
agulhas, que vão estimular o crescimento, minimizar a queda e aumentar a densidade
dos fios.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'OS PROCEDIMENTOS DE RESTAURAÇÃO CAPILAR SÃO INDICADOS TANTO
PARA OS HOMENS QUANTO PARA AS MULHERES',
            'p2' => '<p>Quando essa perda de fios já se tornou crônica, e é possível visualizar zonas brilhantes
no couro cabeludo ou barba sem a presença de fios, é sugerido o tratamento definitivo
por meio do Transplante Capilar FUE (follicular unit extraction). Algumas das indicações
são: fechamento de entradas e diminuição do tamanho da fronte (testa), da coroa e da
região central da cabeça, onde o couro cabeludo fica visível causando um desconforto e
a baixa da autoestima para o paciente, e até mesmo preenchimento de barba ou
sobrancelhas.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'É POSSÍVEL REALIZAR O TRANSPLANTE CAPILAR FUE PARA TRATAMENTO DA
CALVÍCIE E CORREÇÃO DE BARBA E SOBRANCELHAS',
            'p3' => '<p>O transplante é uma cirurgia definitiva, para que os cabelos nunca mais caiam. O
procedimento é sem cortes e com cicatrizes imperceptíveis ao olho nú. Tem a vantagem
de ser realizado com anestesia local, na própria Clínica Corcini.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title2 = 'Bioplastia: plástica sem cortes para realçar a beleza';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => 'Bioplastia',
            'title' => $title2,
            'slug' => Str::slug($title2),
            'subtitle' => 'Harmonização facial e corporal definitiva e minimamente invasiva',
            'order' => 2,
            'headline' => 'QUEIXO, NARIZ, MAÇÃS, BIGODE CHINÊS, LÁBIOS, VINCOS DA BRABEZA, MANDÍBULA, OLHEIRAS, LÓBULO DAS ORELHAS, TÊMPORAS, CANTO LABIAL: DIVERSAS POSSIBILIDADES COM A BIPLASTIA FACIAL.',
            'p1' => '<p>Dentre muitas discussões a respeito do assunto, chegamos na conclusão de que ela está intimamente ligada a fatores culturais e padrões de beleza criados pelo próprio homem. Ser belo é subjetivo. Cada indivíduo tem a sua anatomia, e através dessa harmonização,  realçamos pontos, definimos contornos e buscamos a simetria. Por isso, o senso crítico do médico em busca dos padrões da beleza é essencial. Essa habilidade aliada ao conhecimento científico são a chave do sucesso do procedimento.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'BIPLASTIA: UM PROCEDIMENTO SEGURO E DEFINITIVO, SEM CORTES E SEM CICARIZES',
            'p2' => '<p>CADA PACIENTE É AVALIADO DE ACORDO COM O SEU GÊNERO, IDADE E ETNIA, POR MEIO DE UMA AVALIAÇÃO GLOBAL DA FACE, EM BUSCA DA HARMONIA DENTRO DA SUA PRÓPRIA ESTRUTURA.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'A TÉCNICA É REALIZADA POR MEIO DE PREENCHEDORES FACIAIS QUE REMODELAM A FACE ALIANDO REJUVENESCIMENTO E EMBELEZAMENTO',
            'p3' => '<p>A técnica é realizada na própria Clínica Corcini, com toda segurança e conforto. A anestesia é local e o paciente poderá interagir com a equipe durante todo o procedimento. O procedimento não envolve cortes e nem cicatrizes, e é realizado através de microcânulas atraumáticas. A bioplastia facial é um procedimento estético de fácil recuperação, e em muitas vezes o paciente é liberado para as suas atividades habituais no mesmo dia.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title3 = 'Medicina estética: saúde, beleza e rejuvenescimento';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => 'Medicina estética',
            'title' => $title3,
            'slug' => Str::slug($title3),
            'subtitle' => 'Tratamentos faciais e corporais para sua pele',
            'order' => 3,
            'headline' => 'Everyone just loves the flavor of chocolate paste decorated with rosemary. When the master of shame handles the pains of the seeker, the energy will know monkey. Prarere grauiter ducunt ad bassus planeta.',
            'p1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'hollandaise sauce Solitudo observares, tanquam flavum nuptia.',
            'p2' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Nunquam reperire danista. Axonas mori in revalia!',
            'p3' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        //SUBCATEGORIES
        $title4 = 'Transplante FUE';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => $title4,
            'parent' => 1,
            'title' => $title4,
            'slug' => Str::slug($title4),
            'subtitle' => 'RESULTADOS NATURAIS COM MÁXIMA IMPLANTAÇÃO DE FIOS E SEM CICATRIZES VISÍVEIS',
            'order' => null,
            'headline' => 'TRANSPLANTE FUE: TÉCNICA MINIMAMENTE INVASIVA, SEM NECESSIDADE DE INTERNAÇÃO, REALIZADA NA PRÓPRIA CLÍNICA POR MEIO DO TRANSPLANTE DE FOLÍCULOS CAPILARES DO PRÓPRIO PACIENTE',
            'p1' => '<p>A Tricologia é a ciência médica que estuda os cabelos. Os fios possuem ciclos de vida, com fase de crescimento, repouso e queda. O processo natural é uma queda de 100 a 150 fios ao dia. Ultrapassando esse número, nos deparamos com um quadro de alopecia, que é a perda excessiva do cabelo. Existem alguns fatores que contribuem para essa queda, como a genética, estresse, falta de vitaminas, dano térmico e químico, agrotóxicos, entre outros.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'O TRANSPLANTE FUE PODE SER REALIZADO EM REGIÕES DE CALVÍCIE MASCULINA E FEMININA, ALÉM DE BARBA E SOBRANCELHAS',
            'p2' => '<p>O TRANSPLANTE CAPILAR FUE (FOLLICULAR UNIT EXTRACTION OU EXTRAÇÃO DE UNIDADE FOLICULAR UMA A UMA) É O TRATAMENTO DEFINITIVO DA CALVÍCIE, PARA HOMENS E MULHERES. É UMA TÉCNICA DEFINITIVA, MODERNA E MINUCIOSA, SEM CORTES, DE CARÁTER MINIMAMENTE INVASIVO E AMBULATORIAL, COM ANESTESIA LOCAL E RECUPERAÇÃO RÁPIDA, COM CICATRIZES MILIMÉTRICAS IMPERCEPTÍVEIS AO OLHO NU. UMA TÉCNICA ONDE CIÊNCIA E ARTE ESTÃO ALIADAS.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'A FUE É UMA TÉCNICA DE TRANSPLANTE CAPILAR MINIMAMENTE INVASIVA E DE BREVE RECUPERAÇÃO',
            'p3' => '<p>Na técnica FUE, folículos capilares saudáveis do próprio paciente são retirados fio a fio de uma área doadora para serem transplantados para a área em necessidade. Devido ao resultado natural dessa técnica, é muito comum a procura para correção de falhas na barba ou em sobrancelhas, além do tratamento da calvície do couro cabeludo.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title5 = 'Intradermoterapia Capilar';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => $title5,
            'parent' => 1,
            'title' => $title5,
            'slug' => Str::slug($title5),
            'subtitle' => 'TRATAMENTO PREVENTIVO DA CALVÍCIE COM ESTÍMULO DO COURO CABELUDO',
            'order' => null,
            'headline' => 'A INTRADERMOTERAPIA CAPILAR É UM TRATAMENTO INDICADO PARA TRATAR E PREVENIR O PROCESSO DA CALVÍCIE NO ESTÁGIO INICIAL.',
            'p1' => '<p>A alopécia androgenética feminina e masculina está presente na grande maioria dos pacientes, sendo uma das principais queixas nos consultórios médicos. Com a influência hormonal da testosterona, presente em homens e mulheres, e da enzima 5 alfa redutase, temos a transformação da testosterona em dihidrotestosterona (DHT), a qual leva à queda dos fios.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'IDEAL PARA IMPEDIR A QUEDA DE CABELO E ESTIMULAR O CRESCIMENTO DE NOVOS FIOS',
            'p2' => '<p>Com o uso de medicamentos aplicados diretamente no couro cabeludo, a nível intradérmico, têm-se a redução expressiva na velocidade da queda e o estímulo do crescimento dos fios.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'COM A APLICAÇÃO DE SUBSTÂNCIAS ATIVAS DIRETAMENTE NO COURO CABELUDO, O TRATAMENTO REATIVA AS ESTRUTURAS DO SISTEMA CAPILAR',
            'p3' => '<p>Com essa infusão de medicamentos, conseguimos combinar fatores de crescimento, aminoácidos, vitaminas, estimulantes da circulação, em altas concentrações e diretamente no fio, não sofrendo a ação metabólica como nos medicamentos via oral, e apresentando assim uma resposta mais eficaz e rápida.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => 'APLICAÇÃO INTRADÉRMICA',
            'step1_content' => '<p>A aplicação é realizada na clínica, pela Dra. Corcini, com uma pequena agulha a nível intradérmico, superficial, e com pequenas doses em toda a extensão da área a ser tratada.</p>',
            'step2_title' => 'Sessões',
            'step2_content' => '<p>As sessões são realizadas semanalmente e o número das sessões variam de acordo com cada caso. O uso de medicamentos oral e tópico complementam o sucesso do procedimento.</p>',
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title6 = 'Bioplastia Facial';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => $title6,
            'parent' => 2,
            'title' => $title6,
            'slug' => Str::slug($title6),
            'subtitle' => 'A FACE É O NOSSO CARTÃO DE VISITA. MAS, QUAL SERIA A FACE IDEAL?',
            'order' => null,
            'headline' => 'QUEIXO, NARIZ, MAÇÃS, BIGODE CHINÊS, LÁBIOS, VINCOS DA BRABEZA, MANDÍBULA, OLHEIRAS, LÓBULO DAS ORELHAS, TÊMPORAS, CANTO LABIAL: DIVERSAS POSSIBILIDADES COM A BIPLASTIA FACIAL.',
            'p1' => '<p>Dentre muitas discussões a respeito do assunto, chegamos na conclusão de que ela está intimamente ligada a fatores culturais e padrões de beleza criados pelo próprio homem. Ser belo é subjetivo. Cada indivíduo tem a sua anatomia, e através dessa harmonização,  realçamos pontos, definimos contornos e buscamos a simetria. Por isso, o senso crítico do médico em busca dos padrões da beleza é essencial. Essa habilidade aliada ao conhecimento científico são a chave do sucesso do procedimento.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'BIPLASTIA: UM PROCEDIMENTO SEGURO E DEFINITIVO, SEM CORTES E SEM CICARIZES',
            'p2' => '<p>CADA PACIENTE É AVALIADO DE ACORDO COM O SEU GÊNERO, IDADE E ETNIA, POR MEIO DE UMA AVALIAÇÃO GLOBAL DA FACE, EM BUSCA DA HARMONIA DENTRO DA SUA PRÓPRIA ESTRUTURA.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'A TÉCNICA É REALIZADA POR MEIO DE PREENCHEDORES FACIAIS QUE REMODELAM A FACE ALIANDO REJUVENESCIMENTO E EMBELEZAMENTO',
            'p3' => '<p>A técnica é realizada na própria Clínica Corcini, com toda segurança e conforto. A anestesia é local e o paciente poderá interagir com a equipe durante todo o procedimento. O procedimento não envolve cortes e nem cicatrizes, e é realizado através de microcânulas atraumáticas. A bioplastia facial é um procedimento estético de fácil recuperação, e em muitas vezes o paciente é liberado para as suas atividades habituais no mesmo dia.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title7 = 'Bioplastia Corporal';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => $title7,
            'parent' => 2,
            'title' => $title7,
            'slug' => Str::slug($title7),
            'subtitle' => 'Unrelated x-ray visions lead to the mankind.',
            'order' => null,
            'headline' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.',
            'p1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'Reliable processors, to the moon.',
            'p2' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'The ship-wide vogon proudly transfers the crew.',
            'p3' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        $title8 = 'Harmonização Facial';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'menu_name' => $title8,
            'parent' => 3,
            'title' => $title8,
            'slug' => Str::slug($title8),
            'subtitle' => 'Pathways are the astronauts of the human definition.',
            'order' => null,
            'headline' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.',
            'p1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'Ubi est rusticus messor?',
            'p2' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Compater de magnum ratione, perdere fluctus!',
            'p3' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum leo in magna mollis, id venenatis lorem eleifend. Sed convallis porta quam in faucibus. Suspendisse a eleifend neque. Nulla quis luctus mauris. Praesent molestie est risus, at pharetra nisl sagittis et. Mauris iaculis neque in est imperdiet, quis vulputate ligula scelerisque. Etiam aliquet vitae urna ut tempor. Vivamus vitae suscipit felis. Ut dapibus justo at nisi commodo, sit amet hendrerit leo dapibus. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vulputate ultricies orci.</p>',
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => null,
            'step3_content' => null,
            'step4_title' => null,
            'step4_content' => null,
            'step5_title' => null,
            'step5_content' => null,
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);
    }
}
