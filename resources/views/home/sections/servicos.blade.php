<div class="bg-white py-12 pb-20">
    <div class="max-w-[1100px] mx-auto">

        <!-- Título + Ver mais -->
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-gray-800 text-2xl font-bold">Serviços</h2>

            <a href="#"
               class="text-gray-600 flex items-center gap-1 px-3 py-1 rounded-md
                      transition duration-200 hover:bg-[#73D13F] hover:text-white">
                ver mais →
            </a>
        </div>

        <!-- GRID 6 CARDS -->
        @php 
        $servicos = [
            'Manutenção de motores e bombas',
            'Manutenção de poços artesianos',
            'Teste de vazão / bombeamento',
            'Confecção de painéis / quadros de comando',
            'Projeto de irrigação',
            'Instalação de motores e bombas',
        ];
        @endphp
        <div class="grid grid-cols-3 gap-6">

            @foreach ($servicos as $index => $servico)
                <a href="#"
                    class="relative rounded-xl overflow-hidden shadow-md 
                        transition duration-300 hover:scale-[1.03]
                        hover:shadow-[0_6px_20px_rgba(0,0,0,0.25)]
                        ">

                    <img src="/images/Servicos-card-0{{ $index + 1 }}.png"
                        class="w-full h-[170px] object-cover">

                    <!-- TEXTO CENTRAL -->
                    <div class="absolute inset-0 flex items-center justify-center px-4 z-10">
                        <span class="text-white font-bold text-lg uppercase tracking-wide text-center
                        transition duration-300  drop-shadow-lg">
                            {{ strtoupper($servico) }}
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>