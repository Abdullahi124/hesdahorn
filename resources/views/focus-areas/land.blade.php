@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow flex flex-col row my-auto pb-20">
    <section class="flex items-center justify-center bg-gray-800" 
    style="height: 400px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1591389703635-e15a07b842d7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1490&q=80'); 
        background-size: cover; background-position: center;"
    >
        <div class="text-center">
            <p class="text-3xl font-medium tracking-wider text-white uppercase">LAND</p>
        </div>
    </section>
    
    <v-row justify="center" class="max-w-7xl mx-auto">
        <section class="flex flex-col items-center justify-center max-w-7xl mx-auto">
        <v-expansion-panels popout>
            <v-expansion-panel>
                <v-expansion-panel-header>
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-800 md:text-2xl">Deforestation and its negative impact on Somali's livelihood</h2>
                    </div>
                </v-expansion-panel-header>

                <v-expansion-panel-content>
                    <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-1 w-2/3 mx-auto">
                                    
                        <div class="flex flex-col space-x-4">
                            <div>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Deforestation is the act of clearing or removal of forest or stand of trees from land that is then converted to non forest use.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Deforestation refers to the decrease in forest areas across the world that are lost for other uses, 
                                    causes of desertification in Somalia include deforestation, overgrazing, mismanagement of land and soil erosion, compounded by the 3-year drought that has been ravaging the region.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Somalia Deforestation Rates & Statistics | GFW. In 2010, Somalia had 146kha of tree cover, extending over 0.24% of its land area	From 2001 to 2020, Somalia lost 4.12kha of tree cover, 
                                    equivalent to a 4.7% decrease in tree cover since 2000, and 804kt of CO₂e emissions.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    From 2001 to 2012, Somalia gained 280ha of tree cover equal to < 0.1% of the global total. 
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    In Somalia, the top 2 regions were responsible for 81% of all tree cover loss between 2001 and 2017. Jubbada Dhexe had the most tree cover loss at 1.55kha compared to an average 
                                </p>

                                <table class="border-collapse w-full mt-4">
                                    <thead>
                                        <tr>
                                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</th>
                                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">LOCATION OF TREE COVER LOSS IN SOMALIA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</span>
                                                1. Russia  ---> 16.2Mha
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">LOCATION OF TREE COVER LOSS IN SOMALIA</span>
                                                1. Jubbada Dhexe  ---> 1.55kha
                                            </td>
                                        </tr>

                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</span>
                                                2. United States  ---> 13.8Mha
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">LOCATION OF TREE COVER LOSS IN SOMALIA</span>
                                                2. Jubbada Hoose  ---> 1.31kha
                                            </td>
                                        </tr>

                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</span>
                                                3. Canada  ---> 9.11Mha
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">LOCATION OF TREE COVER LOSS IN SOMALIA</span>
                                                3. Shabeellaha Hoose  ---> 393ha
                                            </td>
                                        </tr>

                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</span>
                                                4. Brazil  ---> 7.59Mha
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">LOCATION OF TREE COVER LOSS IN SOMALIA</span>
                                                4. Shabeellaha Dhexe  ---> 192ha
                                            </td>
                                        </tr>

                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">TREE COVER GAIN IN SOMALIA COMPARED TO OTHER AREAS</span>
                                                5. Indonesia  ---> 6.96Mha
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">LOCATION OF TREE COVER LOSS IN SOMALIA</span>
                                                5. Bay  ---> 64ha
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    In Somalia, 4.7kha of land has burned so far in 2021. This total is normal compared to the total for previous years going back to 2001. The most fires recorded in a year was 2003, with 220kha.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Unfortunately a good portion of the country is completely unusable, and at the rate of deforestation that is happening every year in Somalia, the rest of the usable attributes of the country will soon be gone as well. The reason for the rapid deforestation in Somalia is simply not just black and white.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    According to the FAO, Nigeria has the world's highest deforestation rate of primary forests. It has lost more than half of its primary forest in the last five years. Causes cited are logging, subsistence agriculture, and the collection of fuel wood.
                                </p>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Deforestation is a key global environmental indicator. Many regions of the world are affected by deforestation: namely in South America (Brazil), Central Africa (Congo), Southeast Asia (Indonesia) and Eastern Europe
                                </p>


                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Primary causes of deforestation</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Agricultural Activities</li>
                                        <li class="list-disc mx-4">Livestock ranching</li>
                                        <li class="list-disc mx-4">Illegal logging</li>
                                        <li class="list-disc mx-4">Urbanization</li>
                                        <li class="list-disc mx-4">Desertification of land</li>
                                        <li class="list-disc mx-4">Mining</li>
                                        <li class="list-disc mx-4">Forest fires</li>
                                        <li class="list-disc mx-4">Paper</li>
                                        <li class="list-disc mx-4">Overpopulation</li>
                                    </ul>
                                </p>
                                
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Why should the environmental community care about the threat posed by charcoal?</h3>
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    In 1996, the War-Torn Societies Project reported that northeastern Somalia was producing approximately 4.8 million sacks of charcoal annually. Such a volume would require the logging of nearly 2.1 million Acacia trees.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Consequently, with the deforestation and lack of replanting, the Acacia bussei was placed on the International Union for the Conservation of Nature’s Red List of threatened species.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    For years, this evergreen, drought-tolerant indigenous tree has provided feedstock to pastoralists and helped them stay resilient to droughts. But with increased demands for charcoal, the Acacia bussei is becoming an impractical source of fodder. This has jeopardized the livelihoods of many pastoralists.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    The losses due to such recurring droughts will only increase in the future: In a global ranking of vulnerability to the impacts of climate change, Somalia ranked 7th out of 233 countries and regions.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Recommendations</h3>
                                    In order to reduce the impact of deforestation on livelihood in Somalia
                                    <ul>
                                        <li class="list-disc mx-4">Create public awareness campaign to local communities and the public at large through media, conferences and seminars to local community</li>
                                        <li class="list-disc mx-4">Strengthen forest science education in schools and universities.</li>
                                        <li class="list-disc mx-4">Government participation in developing policies</li>
                                        <li class="list-disc mx-4">And regulation and combat corruption with the help of law enforcement agencies</li>
                                        <li class="list-disc mx-4">In the case of Somalia, Government must develop an alternative energy to reduce the over dependency on charcoal as the only source of energy, although there is significance improvement in the past 5 years as far as alternative energy is concerned</li>
                                    </ul>
                                </p>

                            </div>
                        </div>
                
                    </div>
                </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
                <v-expansion-panel-header>
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-800 md:text-2xl">Green Energy and Sustainable Development: The Way Forward </h2>
                    </div>
                </v-expansion-panel-header>

                <v-expansion-panel-content>
                    <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-1 w-2/3 mx-auto">
                                    
                        <div class="flex flex-col space-x-4">
                            <div>
                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    Green energy is any energy type that is generated from natural resources, such as sunlight, wind or water. It often comes from renewable energy sources although there are some differences between renewable and green energy.
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Somali green economy is based on four pillars</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Agriculture: improving crop and livestock production practices for higher food security and farmer income</li>
                                        <li class="list-disc mx-4">Forestry: protecting and re-establishing forests for their economic and ecosystem services</li>
                                        <li class="list-disc mx-4">Electric Power: expanding electric power generation from renewable energy for domestic and regional markets</li>
                                        <li class="list-disc mx-4">Technology and Transport: industrial sectors and buildings for leapfrogging to modern and energy efficient technologies</li>
                                    </ul>
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">The Way Forward</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Without access to sustainable energy sources, no development will be certain wherever!</li>
                                        <li class="list-disc mx-4">Institutions being home to knowledge society should be front actors to create knowledge-based economy</li>
                                        <li class="list-disc mx-4">The need for institutional thinking towards green energy development is urgent and critical</li>
                                        <li class="list-disc mx-4">Knowledge society vibrancy seems mandatory and compulsory</li>
                                        <li class="list-disc mx-4">The need for scientist’s ecosystem creation is heightened in light of expanding the knowledge horizon of the scientific communities</li>
                                    </ul>
                                </p>

                                <p class="max-w-full mt-4 text-gray-600 px-5 md:px-0">
                                    <h3 class="text-lg font-bold">Proposed plausible solutions:</h3>
                                    <ul>
                                        <li class="list-disc mx-4">Energy access scale up initiatives</li>
                                        <li class="list-disc mx-4">Productive use of rural renewable energy</li>
                                        <li class="list-disc mx-4">Capacity development and investment in mini-hydropower systems and development of regional rural electrification programs in Somali federal states.</li>
                                        <li class="list-disc mx-4">Strengthen the capacity of energy planners and developers, education institutions, and centers of excellence in all Somali Federal States</li>
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