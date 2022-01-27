@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow flex flex-col row my-auto pb-20">
    <section class="flex items-center justify-center bg-gray-800" 
    style="height: 400px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1615529328331-f8917597711f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fHdhdGVyfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); 
        background-size: cover; background-position: center;"
    >
        <div class="text-center">
            <p class="text-3xl font-medium tracking-wider text-white uppercase">WATER</p>
        </div>
    </section>
    

    <v-row justify="center" class="max-w-7xl mx-auto">
        <section class="flex flex-col items-center justify-center max-w-7xl mx-auto">
        <v-expansion-panels popout>

            <v-expansion-panel>
                <v-expansion-panel-header>
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-800 md:text-2xl">Effects of water scarcity and flooding in Somalia </h2>
                    </div>
                </v-expansion-panel-header>

                <v-expansion-panel-content>
                    <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-1">
                        
                        <div class="flex flex-col space-x-4">
                            <div>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Somalia climate range from arid in the northeastern and central regions to semiarid in the northwest and sourth.
                                    In the northeast, annual rainfall is less than 100 mm; in the central plateaus, it is 200 tp 300 mm. The northwest and southwest parts of the country receive average of 510 6110 mm a year.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    On average, the country get less than 500 mm of rain annually.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Most of the rainfall is received in Gu season. This is an indication of how climate conditions in the country affects the vegetation cover and livelihoods of people who depend on it.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    * Heavy rains caused by climatic changes cause flooding in the northern regions. It damages roads, farms, properties as well as livestock.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    * Overflowing of Shabelle river is a recurrent problem in and around Beletweyne and Jowhar cities. The yearly flooding in these areas are enormous. It damages farmland, properties as well as lives.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    * The Somalia government did not enough to remedy these recurrent problems due to lack of resources. However, repairing and constructing of dams is rquired ar the banks of river Shabelle to minimize the risks to people and their livelihoods.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    * In the northern regions dams should be constructed to lessen the effects of flooding in the areas south of the mountains. A good example is Humaweyne dam which was created in the north of Hargeysa with funding from UAE.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    * It is also important to point out that millions of gallons of water goes to the Indian Ocean every year, while there is a shortage of water for farming and drinking.
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