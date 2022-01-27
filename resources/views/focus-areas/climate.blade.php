@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow flex flex-col row my-auto pb-20">
    <section class="flex items-center justify-center bg-gray-800" 
    style="height: 400px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1561553590-267fc716698a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzh8fGNsaW1hdGV8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); 
        background-size: cover; background-position: center;"
    >
        <div class="text-center">
            <p class="text-3xl font-medium tracking-wider text-white uppercase">CLIMATE</p>
        </div>
    </section>

    <v-row justify="center" class="max-w-7xl mx-auto">
        <section class="flex flex-col items-center justify-center max-w-7xl mx-auto">
        <v-expansion-panels popout>

            <v-expansion-panel>
                <v-expansion-panel-header>
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-800 md:text-2xl">The negative impact of plastics on Somali environment </h2>
                    </div>
                </v-expansion-panel-header>

                <v-expansion-panel-content>
                    <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-1">
                        
                        <div class="flex flex-col space-x-4">
                            <div>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Summary</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Plastic is a global issue with destructive impact on earth (e.g. soil erosion, land and ocean pollution)</li>
                                        <li class="list-disc mx-4">The most and least preferred plastic waste disposal is suggested in descending order i.e., Waste reduction>Re-use>Recycle> Incineration>Landfill</li>
                                        <li class="list-disc mx-4">Plastics (plastic bag and bottles) rank No.1 wasted materials in Somalia, based on WHO (2010) report</li>
                                        <li class="list-disc mx-4">Bio-plastics sourced from agri-products/by-products are suggested as an alternative option to fossil fuel based plastics</li>
                                    </ul>
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Recommendations</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Educate people on the negative impacts of plastics, so they could employ their common sense</li>
                                        <li class="list-disc mx-4">Encourage private sector (with subsidy) to involve in as SMEs (small and medium size enterprises)</li>
                                        <li class="list-disc mx-4">Encourage use of non-fossil fuel based materials for shopping, packing and packaging</li>
                                        <li class="list-disc mx-4">Authorities to introduce acts restricting on one-time-use plastics sourced from fossil fuels</li>
                                    </ul>
                                </p>

                            </div>
                        </div>
                
                    </div>
                </v-expansion-panel-content>
            </v-expansion-panel>
        </v-expansion-panels>
    </section>
</v-row>

</section>
@endsection