<!-- component -->
<!-- This is an example component -->
<div id="wrapper" class="gap-3 grid px-6 py-4">
    <div class="sm:gap-4 sm:grid sm:grid-cols-3 sm:grid-flow-row sm:h-32">
        <div id="jh-stats-positive"
            class="flex flex-col justify-center bg-stone px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-green-500 text-md">
                        <span class="font-bold"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24">
                            <path class="heroicon-ui"
                                d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z" />
                        </svg>
                  </p>
                </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Total de billets</p>
            </div>
        </div>

        <div id="jh-stats-negative"
            class="flex flex-col justify-center bg-stone x-5sm:mt-0 px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-md text-red-500">
                        <span class="font-bold"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24">
                            <path class="heroicon-ui"
                                d="M20 9a1 1 0 012 0v8a1 1 0 01-1 1h-8a1 1 0 010-2h5.59L13 10.41l-3.3 3.3a1 1 0 01-1.4 0l-6-6a1 1 0 011.4-1.42L9 11.6l3.3-3.3a1 1 0 011.4 0l6.3 6.3V9z" />
                        </svg>
                   </p>
                </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Billets aujourd'hui</p>
            </div>
        </div>

        <div id="jh-stats-neutral"
            class="flex flex-col justify-center bg-stone sm:mt-0 px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-gray-500 text-md">
                        <span class="font-bold"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24">
                            <path class="heroicon-ui" d="M17 11a1 1 0 010 2H7a1 1 0 010-2h10z" />
                        </svg>
                    </p>
            </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Billets restants</p>
            </div>
        </div>
    </div>

    <div class="sm:gap-4 sm:grid sm:grid-cols-3 sm:grid-flow-row mt-1 sm:h-32">
    <div id="jh-stats-free"
            class="flex flex-col justify-center bg-stone sm:mt-0 px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-gray-500 text-md">
                        <span class="font-bold"></span>
                    </p>
                </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Billets free</p>
            </div>
        </div>

        <div id="jh-stats-vip"
            class="flex flex-col justify-center bg-stone sm:mt-0 px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-gray-500 text-md">
                        <span class="font-bold"></span>
                    </p>
                </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Billets vip</p>
            </div>
        </div>

        <div id="jh-stats-paid"
            class="flex flex-col justify-center bg-stone sm:mt-0 px-6 py-4 border border-gray-300 rounded">
            <div>
                <div>
                    <p class="flex justify-end items-center text-gray-500 text-md">
                        <span class="font-bold"></span>
                    </p>
                </div>
                <p class="font-mono font-semibold text-gray-800 text-3xl text-center"></p>
                <p class="font-sans text-gray-500 text-lg text-center">Billets paid</p>
            </div>
        </div>
    </div>
</div>
 
<div class="mt-3 card radius-1">
    <!-- <h6 class="mb-0 text-uppercase">Input Mask</h6> -->
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-between align-items-center">
                <div>
                    <h5 class="my-4 font-sans text-xl">Les inscriptions</h5>
                </div>
            </div>
            <hr />
            <div class="table-responsive">
                <table class="table mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="font-sans">Nom</th>
                            <th class="font-sans">Email</th>
                            <th class="font-sans">Event</th>
                            <th class="font-sans">Type</th>
                        </tr>
                    </thead>
                    <tbody id="bodyTableAbonnes">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src= "/assetsOrg/js/statistique.js"></script>
