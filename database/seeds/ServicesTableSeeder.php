<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @Cat: Intradermoterapia capilar e transplante FUE - ID #1
         *
         *      @subCat: Transplante FUE - ID #4
         *     - Transplante capilar FUE - ok
         *     - Transplante de Barba FUE - ok
         *     - Transplante de sobrancelha FUE - ok
         *
         *     @SubCat: Intradermoterapia capilar - ID #5
         *     - Intradermoterapia capilar - ok
         */

        /** @post: Transplante Capilar FUE */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 4,
            'title' => 'Transplante Capilar FUE',
            'slug' => Str::slug('Transplante Capilar FUE'),
            'subtitle' => 'Tratamento Definitivo da Calvície Para Homens e Mulheres',
            'headline' => 'TRANSPLANTE CAPILAR FUE: EQUIPE TREINADA COM TÉCNICA DA TURQUIA PARA UMA PRÁTICA DE EXCELÊNCIA, COM RESULTADOS NATURAIS E MÁXIMA IMPLANTAÇÃO DE FIOS.',
            'p1' => '<p>A calvície, ou alopecia androgenética, ligada à herança genética dos pais é a principal causa da perda permanente de cabelo do couro cabeludo em homens a partir dos 30 anos de idade e em mulheres a partir dos 40 anos, sendo mais prevalente no público masculino.  As áreas mais afetadas são: região frontal, temporal (das entradas) e no vértex (coroa).</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A QUEIXA MAIS FREQUENTE NA ALOPECIA ANDROGENÉTICA É A DE AFINAMENTO DOS FIOS',
            'p2' => '<p>O TRANSPLANTE CAPILAR FUE (FOLLICULAR UNIT EXTRACTION OU EXTRAÇÃO DE UNIDADE FOLICULAR UMA A UMA) É O TRATAMENTO DEFINITIVO DA CALVÍCIE, PARA HOMENS E MULHERES. É UMA TÉCNICA DEFINITIVA, MODERNA E MINUCIOSA, SEM CORTES, DE CARÁTER MINIMAMENTE INVASIVO E AMBULATORIAL, COM ANESTESIA LOCAL E RECUPERAÇÃO RÁPIDA, COM CICATRIZES MILIMÉTRICAS IMPERCEPTÍVEIS AO OLHO NU E RESULTADOS MUITO NATURAIS. UMA TÉCNICA ONDE CIÊNCIA E ARTE ESTÃO ALIADAS.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'O TRANSPLANTE CAPILAR REDUZ DE MANEIRA DEFINITIVA A ÁREA DE CALVÍCIE',
            'p3' => '<p>Na técnica FUE, folículos capilares saudáveis do próprio paciente são retirados fio a fio de uma área doadora para serem transplantados para a área da calvície. A técnica é realizada na própria Clínica Corcini, com todo o conforto. A anestesia é local e o paciente poderá interagir com a equipe durante todo o procedimento, ou, se preferir, poderá ser medicado para dormir e relaxar, conforme prescrição da Dra. Ana Corcini. A sensibilidade no couro cabeludo é baixa na maioria dos pacientes, sendo um procedimento muito confortável em relação a dor.</p>',
            'p4' => 'O transplante apresenta 2 períodos de cirurgia, o primeiro no qual que se extraem os folículos, e o segundo no qual é realizada a implantação dos pelos para a região da calvície. Todo esse processo dura em média 7h. ',
            'video_url' => 'https://www.youtube.com/embed/S0zEFWVJ53E',
            'video_desc' => 'ASSISTA O VÍDEO E ENTENDA MAIS COMO FUNCIONA O TRANSPLANTE CAPILAR FUE',
            'step1_title' => 'ETAPA 1: CAPTAÇÃO DOS PÊLOS',
            'step1_content' => '<p>Após os exames de imagem e de laboratório solicitados previamente para o pré-operatório serem analisados e os sinais vitais do paciente serem verificados, ele é encaminhado para a sala do pré-operatório, onde irá se iniciar o procedimento de raspagem total do cabelo para os homens e parcial para as mulheres. Nas mulheres, a raspagem é feita somente na região posterior da cabeça, que não ficará à vista após o transplante, pois o cabelo de cima irá cobrir a zona raspada. As marcações na região do transplante são feitas, com uma visão estética apurada para manter o desenho de forma natural, cobrindo as falhas existentes e mantendo as características desejadas. Após a marcação, iniciam-se os bloqueios com anestesia local da área. O paciente estará sob monitoramento durante todo o período do procedimento. A extração dos folículos é realizada na parte posterior da cabeça, onde não há influência hormonal e os pelos são sadios. Com um instrumental cirúrgico, denominado “punch”, o qual possui uma micro lâmina circular, é realizada a extração das unidades foliculares uma a uma, sempre com o cuidado de manter um distanciamento adequado entre os fios, para não gerar cicatriz na área da captação. Todo o processo da primeira etapa cirúrgica demora cerca de 4 horas. Após, o paciente é alimentado com um lanche leve e é dado início à segunda etapa, referente à implantação dos fios.</p>',
            'step2_title' => 'ETAPA 2: ETAPA CIRÚRGICA DE IMPLANTAÇÃO DOS FIOS',
            'step2_content' => '<p>Com o paciente em decubito ventral, de barriga para cima, iniciam-se os bloqueios com anestesia local na região em que serão implantados os pelos. É utilizado, para isso, um instrumental cirúrgico denominado "implanter", que possui uma fina agulha com 0,8 mm de diâmetro com a qual os fios serão implantados para dentro do couro cabeludo, um a um. Os fios implantados são separados de acordo com o número de pelos em cada bulbo. Os folículos que tiverem apenas um pelo serão transplantados na linha frontal, e os demais, com maior quantidade de fios por bulbo, serão implantados nas linhas posteriores, devendo sempre seguir o trajeto correto dos pelos.  Nessa etapa é muito importante a correta implantação, para que haja naturalidade e excelência no resultado, considerando que é uma técnica definitiva.</p>',
            'step3_title' => 'APÓS O PROCEDIMENTO',
            'step3_content' => '<p>Após a segunda etapa cirúrgica, os curativos são realizados apenas na região posterior da cabeça onde foram captados os fios. O paciente deverá mantê-los por 24h. O paciente retornará para a casa com um acompanhante, pois, devido o tempo cirúrgico, poderá apresentar uma leve vertigem. No dia seguinte, o paciente não sentirá dor, mas deverá manter o repouso por 48h, para que não haja o risco de retirar os fios implantados.</p>',
            'step4_title' => 'REVISÕES',
            'step4_content' => '<p>As revisões no pós procedimento serão realizadas de acordo com os seguintes períodos: 3 dias após o procedimento, 15 dias após, 30 dias após e uma visita mensal para acompanhamento da Dra. Corcini.</p>',
            'step5_title' => 'Resultado',
            'step5_content' => '<p>Após um período médio de 3 meses, os fios iniciam seu crescimento natural em um processo que dura cerca de 24 meses, quando poderá ser visualizado o resultado final do transplante.</p>',
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        /** @post: Transplante de Barba FUE */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 4,
            'title' => 'Transplante de barba FUE',
            'slug' => Str::slug('Transplante de barba FUE'),
            'subtitle' => 'TRATAMENTO DEFINITIVO PARA AUMENTAR A DENSIDADE DA BARBA',
            'headline' => 'TRANSPLANTE BE BARBA FUE: EQUIPE TREINADA COM TÉCNICA DA TURQUIA PARA UMA PRÁTICA DE EXCELÊNCIA, COM RESULTADOS NATURAIS E MÁXIMA IMPLANTAÇÃO DE FIOS.',
            'p1' => '<p>O transplante capilar FUE (follicular unit extraction ou extração de unidade folicular uma a uma) é o tratamento definitivo da alopecia de barba em homens. É uma técnica definitiva, moderna e minuciosa, sem cortes, de caráter minimamente invasivo e ambulatorial, com anestesia local e recuperação rápida, com cicatrizes milimétricas imperceptíveis ao olho nu e resultados muito naturais. Uma técnica onde ciência e arte estão aliadas.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'IDEAL PARA CORRIGIR FALHAS E TORNAR A BARBA MAIS ESPESSA',
            'p2' => '<p>Na técnica FUE, folículos capilares saudáveis do próprio paciente são retirados fio a fio de uma área doadora para serem transplantados para a área em necessidade.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'A TÉCNICA FUE É CONSIDERADA A TÉCNICA MAIS MODERNA E MENOS INVASIVA PARA IMPLANTE CAPILAR NA BARBA',
            'p3' => '<p>A técnica é realizada na própria Clínica Corcini, com todo o conforto. A anestesia é local e o paciente poderá interagir com a equipe durante todo o procedimento, ou, se preferir, poderá ser medicado para dormir e relaxar, conforme prescrição da Dra. Ana Corcini. A sensibilidade no couro cabeludo é baixa na maioria dos pacientes, sendo um procedimento muito confortável em relação a dor. O transplante apresenta 2 períodos de cirurgia, o primeiro no qual que se extraem os folículos, e o segundo no qual é realizada a implantação dos pelos para a região da calvície. Todo esse processo dura em média 7h.</p>',
            'p4' => null,
            'video_url' => 'https://www.youtube.com/embed/S0zEFWVJ53E',
            'video_desc' => 'ASSISTA O VÍDEO E ENTENDA MAIS COMO FUNCIONA O TRANSPLANTE CAPILAR FUE',
            'step1_title' => 'ETAPA 1: CAPTAÇÃO DOS PÊLOS',
            'step1_content' => '<p>Após os exames de imagem e de laboratório solicitados previamente para o pré-operatório serem analisados e os sinais vitais do paciente serem verificados, ele é encaminhado para a sala do pré-operatório, onde irá se iniciar o procedimento de raspagem de uma pequena faixa de cabelo na região posterior da cabeça. As marcações na região do transplante são feitas, com uma visão estética apurada para manter o desenho de forma natural, cobrindo as falhas existentes e mantendo as características desejadas. Após a marcação, iniciam-se os bloqueios com anestesia local da área. O paciente estará sob monitoramento durante todo o período do procedimento. A extração dos folículos é realizada na parte posterior da cabeça, onde não há influência hormonal e os pelos são sadios. Com um instrumental cirúrgico, denominado “punch”, o qual possui uma micro lâmina circular, é realizada a extração das unidades foliculares uma a uma, sempre com o cuidado de manter um distanciamento adequado entre os fios, para não gerar cicatriz na área da captação. Todo o processo da primeira etapa cirúrgica demora cerca de 4 horas. Após, o paciente é alimentado com um lanche leve e é dado início à segunda etapa, referente à implantação dos fios.</p>',
            'step2_title' => 'ETAPA 2: ETAPA CIRÚRGICA DE IMPLANTAÇÃO DOS FIOS',
            'step2_content' => '<p>Com o paciente em decubito ventral, de barriga para cima, iniciam-se os bloqueios com anestesia local na região em que serão implantados os pelos. É utilizado, para isso, um instrumental cirúrgico denominado "implanter", que possui uma fina agulha com 0,6 mm de diâmetro com a qual os fios serão implantados para dentro do couro cabeludo, um a um. Os fios implantados são separados de acordo com o número de pelos em cada bulbo. Os folículos que tiverem apenas um pelo serão transplantados na linha frontal, e os demais, com maior quantidade de fios por bulbo, serão implantados nas linhas posteriores, devendo sempre seguir o trajeto correto dos pelos.  Nessa etapa é muito importante a correta implantação, para que haja naturalidade e excelência no resultado, considerando que é uma técnica definitiva.</p>',
            'step3_title' => 'Após o procedimento',
            'step3_content' => '<p>Após a segunda etapa cirúrgica, os curativos são realizados apenas na região posterior da cabeça onde foram captados os fios. O paciente deverá mantê-los por 24h. O paciente retornará para a casa com um acompanhante, pois, devido o tempo cirúrgico, poderá apresentar uma leve vertigem. No dia seguinte, o paciente não sentirá dor, mas deverá manter o repouso por 48h, para que não haja o risco de retirar os fios implantados.</p>',
            'step4_title' => 'Revisões',
            'step4_content' => '<p>As revisões no pós procedimento serão realizadas de acordo com os seguintes períodos: 3 dias após o procedimento, 15 dias após, 30 dias após e uma visita mensal para acompanhamento da Dra. Corcini.</p>',
            'step5_title' => 'Resultado',
            'step5_content' => '<p>Após um período médio de 3 meses, os fios iniciam seu crescimento natural em um processo que dura cerca de 24 meses, quando poderá ser visualizado o resultado final do transplante.</p>',
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);

        /** @post: Transplante de sobrancelha FUE */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 4,
            'title' => 'Transplante de sobrancelha FUE',
            'slug' => Str::slug('Transplante de sobrancelha FUE'),
            'subtitle' => 'RESULTADO NATURAL E PERMANENTE PARA PREENCHIMENTO DAS SOBRANCELHAS, CORREÇÃO DE FALHAS E ALOPECIA',
            'headline' => 'TRANSPLANTE DE SOBRANCELHA FUE: EQUIPE TREINADA COM TÉCNICA DA TURQUIA PARA UMA PRÁTICA DE EXCELÊNCIA, COM RESULTADOS NATURAIS E MÁXIMA IMPLANTAÇÃO DE FIOS.',
            'p1' => '<p>O transplante capilar FUE (follicular unit extraction ou extração de unidade folicular uma a uma) é o tratamento definitivo da alopecia de barba em homens. É uma técnica definitiva, moderna e minuciosa, sem cortes, de caráter minimamente invasivo e ambulatorial, com anestesia local e recuperação rápida, com cicatrizes milimétricas imperceptíveis ao olho nu e resultados muito naturais. Uma técnica onde ciência e arte estão aliadas.</p>',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'TÉCNICA DEFINITIVA SEM CORTES E EXTREMAMENTE MINUCIOSA PARA REALÇAR A BELEZA DO SEU OLHAR',
            'p2' => '<p>Na técnica FUE, folículos capilares saudáveis do próprio paciente são retirados fio a fio de uma área doadora para serem transplantados para a área em necessidade.</p>',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'A TÉCNICA FUE REALIZA O TRANSPLANTE FIO A FIO DE SOBRANCELHAS COM RESULTADOS MUITO MAIS NATURAIS QUE A MICROPIGMENTAÇÃO',
            'p3' => '<p>A técnica é realizada na própria Clínica Corcini, com todo o conforto. A anestesia é local e o paciente poderá interagir com a equipe durante todo o procedimento, ou, se preferir, poderá ser medicado para dormir e relaxar, conforme prescrição da Dra. Ana Corcini. A sensibilidade no couro cabeludo é baixa na maioria dos pacientes, sendo um procedimento muito confortável em relação a dor.</p>',
            'p4' => 'O transplante apresenta 2 períodos de cirurgia, o primeiro no qual que se extraem os folículos, e o segundo no qual é realizada a implantação dos pelos para a região da calvície. Todo esse processo dura em média 5h.',
            'video_url' => 'https://www.youtube.com/embed/S0zEFWVJ53E',
            'video_desc' => 'ASSISTA O VÍDEO E ENTENDA MAIS COMO FUNCIONA O TRANSPLANTE CAPILAR FUE ',
            'step1_title' => 'ETAPA 1: CAPTAÇÃO DOS PÊLOS',
            'step1_content' => 'Após os exames de imagem e de laboratório solicitados previamente para o pré-operatório serem analisados e os sinais vitais do paciente serem verificados, ele é encaminhado para a sala do pré-operatório, onde irá se iniciar o procedimento de raspagem de uma pequena faixa de cabelo na região posterior da cabeça. As marcações na região do transplante são feitas, com uma visão estética apurada para manter o desenho de forma natural, cobrindo as falhas existentes e volumizando toda a região.  Após a marcação, iniciam-se os bloqueios com anestesia local da área doadora posterior da cabeça onde os fios serão captados. A extração dos folículos é realizada na parte posterior da cabeça, onde não há influência hormonal e os pelos são sadios. Com um instrumental cirúrgico, denominado “punch”, o qual possui uma micro lâmina circular, é realizada a extração das unidades foliculares uma a uma, sempre com o cuidado de manter um distanciamento adequado entre os fios, para não gerar cicatriz na área da captação. Todo o processo da primeira etapa cirúrgica demora cerca de 2 horas. Após, o paciente é alimentado com um lanche leve e é dado início à segunda etapa, referente à implantação dos fios.',
            'step2_title' => 'ETAPA 2: ETAPA CIRÚRGICA DE IMPLANTAÇÃO DOS FIOS',
            'step2_content' => 'Com o paciente em decubito ventral, de barriga para cima, iniciam-se os bloqueios com anestesia local na região em que serão implantados os pelos. É utilizado, para isso, um instrumental cirúrgico denominado "implanter", que possui uma fina agulha com 0,6 mm de diâmetro com a qual os fios serão implantados para dentro do couro cabeludo, um a um. Os fios são fatiados para que se apresentem apenas com um fio no bulbo, assim se alcançará um aspecto natural para a sobrancelha. Nessa etapa é muito importante a correta implantação, para que haja naturalidade e excelência no resultado, considerando que é uma técnica definitiva.',
            'step3_title' => 'Após o procedimento',
            'step3_content' => 'Após a segunda etapa cirúrgica, os curativos são realizados apenas na região posterior da cabeça onde foram captados os fios. O paciente deverá mantê-los por 24h. O paciente retornará para a casa com um acompanhante, pois, devido o tempo cirúrgico, poderá apresentar uma leve vertigem. No dia seguinte, o paciente não sentirá dor, mas deverá manter o repouso por 48h, para que não haja o risco de retirar os fios implantados. ',
            'step4_title' => 'Revisões',
            'step4_content' => 'As revisões no pós procedimento serão realizadas de acordo com os seguintes períodos: 3 dias após o procedimento, 15 dias após, 30 dias após e uma visita mensal para acompanhamento da Dra. Corcini.',
            'step5_title' => 'Resultado',
            'step5_content' => 'Após um período médio de 3 meses, os fios iniciam seu crescimento natural em um processo que dura cerca de 24 meses, quando poderá ser visualizado o resultado final do transplante.',
            'step6_title' => null,
            'step6_content' => null,
            'step7_title' => null,
            'step7_content' => null
        ]);


        ##############################################################################################################

        /**
         * @Cat: Bioplastia: plástica sem cortes para realçar a beleza - ID #2
         *
         *      @subCat: Bioplastia Facial - ID #6
         *     - Bioplastia dos lábios - ok
         *     - Bioplastia do nariz - ok
         *     - Bioplastia do malar e da região zigomática - ok
         *     - Bioplastia das pálpebras inferiores - ok
         *     - Bioplastia da linha da mandíbula - ok
         *     - Bioplastia do queixo - ok
         *     - Bioplastia do sulco nasogeniano - ok
         *     - Bioplastia do vinco glabelar - ok
         *     - Bioplastia do canto labial - ok
         *
         *      @subCat: Bioplastia Corporal - ID #7
         *
         */

        /** @post: Bioplastia dos lábios */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia dos lábios',
            'slug' => Str::slug('Bioplastia dos lábios'),
            'subtitle' => 'PREENCHIMENTO LABIAL DEFINITIVO PARA CONTORNO E AUMENTO DE VOLUME',
            'headline' => 'UM LÁBIO BEM DESENHADO E CARNUDO É O SONHO DE MUITAS E MUITOS PACIENTES. VEMOS NA PRÁTICA AO FAZER UMA MAQUIAGEM E DELIMITAR OS LÁBIOS COM O BATOM.',
            'p1' => 'Com o passar dos anos ocorre a absorção de gordura, de tecido e do osso, levando à inversão dos lábios. Ao realizar a técnica da bioplastia labial, é possível melhorar o contorno e o volume da região, além de tratar as rugas ao redor dos lábios.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'O PREENCHIMENTO LABIAL É UMA TÉCNICA POUCO INVASIVA E BASTANTE SEGURA, ALÉM DE SER UM DOS PROCEDIMENTOS MAIS PROCURADOS',
            'p2' => 'A técnica é realizada com microcânula, com baixo volume e baixa concentração do biomaterial. E nesta região, diferente, das demais, é preciso ter cautela com uso de biomaterial de baixa concentração, além de se ter critérios rigorosos para a indicação, já que se trata de uma mucosa.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
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

        /** @post: Bioplastia do nariz */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do nariz',
            'slug' => Str::slug('Bioplastia do nariz'),
            'subtitle' => 'CONHECIDA COMO RINOMODELAÇÃO DEFINITIVA E SEM CORTES',
            'headline' => 'A RINOMODELAÇÃO SEM CORTES ATRAVÉS DA BIOPLASTIA É UMA TÉCNICA QUE CORRIGE PEQUENAS FALHAS NA ESTÉTICA DO NARIZ, COMO A MINIMIZAÇÃO DA CURVA NO ALTO DO DORSO OU A ELEVAÇÃO DA PONTA',
            'p1' => 'A bioplastia do nariz é indicada para o “nariz de bruxa”, onde a ponta caída leva a um aspecto envelhecido e com tamanho maior, além da correção do dorso, no qual, muitas vezes, há irregularidades ósseas.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A BIOPLASTIA NASAL É UM PROCEDIMENTO NÃO CIRÚRGICO QUE PROMETE MELHORAR O ASPECTO ESTÉTICO DO NARIZ',
            'p2' => 'A técnica é realizada com microcânulas atraumáticas e anestesia local, com embasamento científico, anatômico e bom senso estético.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
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

        /** @post: Bioplastia do malar e da região zigomática */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do malar e da região zigomática',
            'slug' => Str::slug('Bioplastia do malar e da região zigomática'),
            'subtitle' => 'CONTORNO E MOVIMENTO PARA A FACE ATRAVÉS DA DEFINIÇÃO DAS “MAÇÃS DO ROSTO”',
            'headline' => 'O PREENCHIMENTO DAS MAÇÃS DO ROSTO É, SEM DÚVIDA, UM DOS MAIS IMPORTANTES PARA A HARMONIZAÇÃO FACIAL. A DEFINIÇÃO DESSAS ÁREAS, GERA CONTORNO E MOVIMENTO PARA A FACE, proporcionando um efeito de lifting DISCRETO E COM EFEITO REJUVENESCEDOR',
            'p1' => 'Com a projeção do malar e da região zigomática, é possível devolver pontos luminosos para o desenho do rosto, levando ao conhecido “efeito blush”. Além de devolver movimento, a técnica da bioplastia nestas áreas cria pontos de sustentação para a face, estimulando colágeno e tecido conjuntivo.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A BIOPLASTIA NAS “MAÇÃS DO ROSTO” É UMA ÓTIMA OPÇÃO PARA SUBSTITUIR A BICHECTOMIA E DAR UM NOVO FORMATO AO ROSTO',
            'p2' => 'A região zigomática é a linha inferior do canto externo do olho, e seu desenho deve estar levemente proeminente do restante. Já o malar, deve estar dentro do padrão do preenchimento avaliando a face como um todo. O aumento de volume na região acima das bochechas faz com que elas pareçam menores, deixando o rosto mais marcado e mais fino.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => 'A técnica é realizada com anestesia local e microcânulas atraumáticas, a nível profundo, sem cortes e sem cicatrizes. E o paciente estará livre para as suas atividades habituais no mesmo dia do procedimento. ',
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        /** @post: Bioplastia das pálpebras inferiores */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia das pálpebras inferiores',
            'slug' => Str::slug('Bioplastia das pálpebras inferiores'),
            'subtitle' => 'COM A BIOPLASTIA É POSSÍVEL DIMINUIR A APARÊNCIA ENVELHECIDA CAUSADA PELAS OLHEIRAS',
            'headline' => 'A TÉCNICA DA BIOPLASTIA NESTE CASO É IDEAL PARA CORRIGIR FLACIDEZ AO REDOR DOS OLHOS E PREENCHER SULCOS QUE ACENTUAM AS OLHEIRAS. ',
            'p1' => 'Muitas vezes aspecto das olheiras se deve apenas à existência de uma depressão na região localizada abaixo dos olhos, conhecidas como pálpebras, podendo estar ali por motivos genéticos ou por alguma causa adquirida.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A BIOPLASTIA NA REGIÃO DAS OLEHIRAS REDUZ O ASPECTO CANSADO E AS MANCHAS ESCURAS AO REDOR DA PÁLPEBRA INFERIOR',
            'p2' => 'A técnica da bioplastia na região das olheiras é indicada para suavizar as concavidades formadas nas pálpebras inferiores. Essas concavidades geram sombra para a região dos olhos levando a um aspecto cansado e envelhecido. Nesta região em que a pele é muito fina e mais suscetível ao envelhecimento, além da projeção gerar um ponto de luz, proporcionando clareamento às olheiras, a técnica da bioplastia também estimula os tecidos de sustentação local, como o colágeno e a elastina.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => 'Para suavizar, utiliza-se o implante do biomaterial (polimetilmetacrilato) através de uma técnica minimamente invasiva, sem cortes e com o uso de uma microcânula atraumática. O conhecimento anatômico e do produto são fundamentais para uma técnica de sucesso. Realizar o procedimento em etapas gera segurança e resultados naturais para o paciente. ',
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        /** @post: Bioplastia da linha da mandíbula */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia da linha da mandíbula',
            'slug' => Str::slug('Bioplastia da linha da mandíbula'),
            'subtitle' => 'COM A BIOPLASTIA É POSSÍVEL DIMINUIR A APARÊNCIA ENVELHECIDA CAUSADA PELAS OLHEIRAS',
            'headline' => 'A BIOPLASTIA DA LINHA DA MANDIBULAR É O PREENCHIMENTO DA REGIÃO QUE FAZ A DIVISÃO ENTRE A FACE E O PESCOÇO, PARA REALÇAR O CONTORNO FACIAL.',
            'p1' => 'A visão estática desde os primórdios toma como referência a rainha Nefertite e seus ângulos mandibulares bem definidos, que delineavam sua face e pescoço.  Essa definição proporciona a segmentação da face com o pescoço, criando um alicerce de sustentação, devido ao estímulo de tecido conjuntivo e de fibras elásticas formadas  pelo implante do biomaterial. A reabsorção de gordura, de células, de osso e a própria característica genética são as causas dessa falta de definição e da queda do tecido. ',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'COM O PREENCHIMENTO DA LINHA MANDIBULAR É POSSÍVEL DIMINUIR A FLACIDEZ TISSULAR, DEIXANDO UM RESULTADO SEMELHANTE AO DE UM LIFTING',
            'p2' => 'A bioplastia mandibular utiliza o implante do biomaterial (polimetilmetacrilato), compatível ao organismo humano e não absorvível, através de uma técnica minimamente invasiva com anestesia local, sem cortes e com o uso de uma microcânula atraumática, na qual o conhecimento anatômico e do produto são fundamentais para uma técnica satisfatória, segura e natural.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        /** @post: Bioplastia do queixo */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do queixo',
            'slug' => Str::slug('Bioplastia do queixo'),
            'subtitle' => 'PREENCHIMENTO DE QUEIXO PARA AUMENTAR OU MODELAR O MENTO SEM CIRURGIA',
            'headline' => 'QUEIXO RETRAÍDO É UMA DAS PRINCIPAIS QUEIXAS NAS CLÍNICAS DE MEDICINA ESTÉTICA. BIOPLASTIA DE QUEIXO (MENTO) É INDICADA PARA AUMENTO DO VOLUME DESSA REGIÃO COM A INTENÇÃO DE HARMONIZÁ-LO COM O RESTANTE DO ROSTO. ',
            'p1' => 'Após um exame detalhado da anatomia e da avaliação global da face, com conhecimento técnico e anatômico, iniciam-se as marcações das devidas proporções e projeções da região, olhando a face com um todo e buscando a devida harmonização das estruturas. Com essa projeção, alinham-se os ângulos de acordo com as medidas dos terços da face dentro do padrão de beleza que o paciente deseja. Além de ser possível realizar o alinhamento do mento, também pode-se suavizar a papada, na maioria das vezes.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A BIOPLASTIA DE QUEIXO POSSIBILITA ATUAR EM ASSIMETRIAS QUE POSSAM INTERFERIR NA HARMONIA DA FACE',
            'p2' => 'A bioplastia do mento utiliza o implante do biomaterial (polimetilmetacrilato – PMMA), compatível ao organismo humano e não absorvível, através de uma técnica minimamente invasiva com anestesia local, sem cortes e com o uso de uma microcânula atraumática, na qual o conhecimento anatômico e do produto são fundamentais para uma técnica satisfatória, segura e natural.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
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

        /** @post: Bioplastia do sulco nasogeniano */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do sulco nasogeniano',
            'slug' => Str::slug('Bioplastia do sulco nasogeniano'),
            'subtitle' => 'PREENCHIMENTO DE QUEIXO PARA AUMENTAR OU MODELAR O MENTO SEM CIRURGIA',
            'headline' => '“BIGODE CHINES” É O NOME POPULAR DA LINHA CURVA QUE SE FORMA ENTRE A ASA DO NARIZ E OS LÁBIOS, CONHECIDA COMO SULCO NASOGENIANO OU NASOLABIAL.',
            'p1' => 'Com o passar do tempo, ocorre a perda de estruturas que levam ao envelhecimento, incluindo as rugas e sulcos profundos. Essa perda de estruturas envolvem a absorção de células, tecidos de sustentação, gordura e osso. Especificamente, o bigode chinês sofre essas influências associado à influência das mímicas faciais, tais como sorrir, comer, falar, se expressar.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'A BIOPLASTIA BUSCA ATENUAR OS SULCOS FACIAIS POR MEIO DA REPOSIÇÃO E AUMENTO DE VOLUME NA FACE',
            'p2' => 'O afundamento deste sulco, que vai da asa do nariz até o canto da boca, gera um aspecto envelhecido e cansado para o paciente. Com a técnica da bioplastia, é possível repor esse volume, em etapas, até chegar-se no desejo do paciente, sempre em conformidade com a visão estética e de conhecimento médico.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => 'A anestesia é local, e o procedimento é realizado sem cortes, com uso de microcânula  atraumática, feito em etapas, buscando a maior naturalidade possível. O conhecimento anatômico, de músculos e vasos, além da técnica correta, são fundamentais para o sucesso e segurança  do procedimento.',
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        /** @post: Bioplastia do vinco glabelar */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do vinco glabelar',
            'slug' => Str::slug('Bioplastia do vinco glabelar'),
            'subtitle' => 'PREENCHIMENTO DEFINITIVO IDEAL PARA RESTABELECER A PLENITUDE DA JUVENTUDE EM SEU ROSTO',
            'headline' => 'A REGIÃO FRONTAL É A QUE MAIS SOFRE INFLUÊNCIA DA MÍMICA FACIAL. A BIOPLASTIA DAS LINHAS DE EXPESSÃO GLABELARES AUXILIA MUITO NO REJUVENESCIMENTO GLOBAL DA FACE.',
            'p1' => 'Com a influência da gravidade e da força das musculaturas, as linhas finas de expressão que são visualizadas apenas quando nos expressamos, começam a se tornar visíveis mesmo sem expressão, formando verdadeiras cicatrizes na face. Entre as sobrancelhas, existe a musculatura glabelar, que, quando exigida intensamente, forma vincos entre os supercílios levando ao aspecto de brabeza.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'AS RUGAS GLABELARES PODEM SER PREENCHIDAS POR MEIO DA BIOPLASTIA, UM PROCEDIMENTO SEGURO FEITO COM MATERIAIS BIOCOMPATÍVEIS',
            'p2' => 'Com a técnica da bioplastia, implante infiltrativo definitivo, é possível suavizar esses vincos, aliviando o aspecto de “brabeza”, o qual é um grande causador de desconforto entre os pacientes. Com anestesia local, uso de microcânula atraumática e um biomaterial seguro, registrado na Anvisa, realizamos a técnica em etapas, complementando a cada 30 dias. O conhecimento anatômico e a maestria da técnica são fundamentais para o resultado satisfatório e seguro.',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        /** @post: Bioplastia do canto labial */
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => 'Bioplastia do canto labial',
            'slug' => Str::slug('Bioplastia do canto labial'),
            'subtitle' => 'PREENCHIMENTO DEFINITIVO PARA SUAVIZAÇÃO DE COMISSURAS OU CANTOS DA BOCA CAÍDOS',
            'headline' => 'CONHECIDO COMO SORRISO DE MARIONETE, A QUEDA DOS CANTOS DA BOCA GERA UM ASPECTO ENVELHECIDO E TRISTE PARA O PACIENTE. PARA SE ELEVAR O CANTO DA BOCA, É INDICADA A TÉCNICA DA BIOPLASTIA NOS CANTOS DO LÁBIO INFERIOR.',
            'p1' => 'Ao realizarmos a marcação da bioplastia, desenha-se a figura de dois triângulos abaixo dos cantos do lábio inferior, os quais serão preenchidos. Nesta região existe a força da musculatura da boca, gerando envelhecimento, flacidez e a queda do canto labial.',
            'image1' => 'public/service/jXbn13jJBhTuc4WR9IfMfKUaOuDQWMpdvY11I6f0.jpeg',
            'image1desc' => 'O PREENCHIMENTO DAS LINHAS DE EXPRESSÕES ORAIS CONFERE SUSTENTAÇÃO AO CANTO DA BOCA E DIMINUI A SENSAÇÃO DE UMA FACE TRISTE',
            'p2' => 'A técnica é realizada com um biomaterial compatível ao organismo, anestesia local,  microcânula atraumática, e sem a necessidade de curativos. O paciente estará liberado para as suas atividades no mesmo dia do procedimento. Para a segurança da técnica, é fundamental o conhecimento anatômico, com um produto de excelente qualidade, registrado na Anvisa. ',
            'image2' => 'public/service/N8lOCknu7iCOXUfye6vLvRgtCEnLdNDeecRSjFx5.jpeg',
            'image2desc' => 'Descrição',
            'p3' => null,
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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

        ##############################################################################################################

         /** @post: X
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'category_id' => 6,
            'title' => '',
            'slug' => Str::slug(''),
            'subtitle' => '',
            'headline' => '',
            'p1' => '',
            'image1' => null,
            'image1desc' => '',
            'p2' => '',
            'image2' => null,
            'image2desc' => '',
            'p3' => '',
            'p4' => null,
            'video_url' => null,
            'video_desc' => null,
            'step1_title' => null,
            'step1_content' => null,
            'step2_title' => null,
            'step2_content' => null,
            'step3_title' => '',
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
          */

    }
}
