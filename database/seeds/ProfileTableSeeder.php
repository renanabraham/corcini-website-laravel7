<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('profiles')->insert([
            'title' => 'Melhore a sua autoestima com a medicina preventiva e estética',
            'subtitle' => 'Rejuvenescimento, beleza e Saúde com tratamentos minimamente invasivos',
            'headline' => 'A Clínica Corcini é referência no transplante capilar com a técnica FUE em Porto Alegre. Além destes procedimentos, a Clínica oferece uma gama de outros serviços, em prol da beleza e dos cuidados com o envelhecimento saudável.',
            'p1' => 'Dra . Ana Cecília Corcini é uma médica estudiosa, especialista em Rejuvenescimento e Estética, formada pela Universidade Católica de Pelotas, UCPEL . É também pós - graduada pela International Association of Aesthetic Medicine(IAAM), com aperfeiçoamento em transplante capilar FUE(folicular unit extraction).',
            'p2' => 'A Dra . atua ainda como palestrante, congressista, e está sempre em busca da inovação e do conhecimento na área da saúde e do rejuvenescimento, para trazer ainda mais comodidade e qualidade de vida para a vida das pessoas.',
            'p3' => 'A Clínica Corcini é um centro integrado de Medicina & Estética, Restauração Capilar e Rejuvenescimento, pioneira em transplante capilar na região do Vale dos Sinos no Rio Grande do Sul . Conta com uma equipe especializada que zela pela saúde e autoestima dos seus pacientes, com ética e responsabilidade.',
            'p4' => 'O cuidado com a estética exerce papel fundamental na valorização da autoestima e relação social das pessoas. Muitas vezes este cuidado está ao alcance de todos com tecnologias e recursos novos que permitem tratamentos rápidos e simples, além de procedimentos como botox e preenchimentos.'
        ]);
    }
}
