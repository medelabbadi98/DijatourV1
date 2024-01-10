<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="preloader">
	    <div class="preloader__wrap">
		    <div class="circle-pulse">
                 <div class="circle-pulse__1"></div>
                <div class="circle-pulse__2"></div>
            </div>
		    <div class="preloader__progress"><span></span></div>
		</div>
	</div>
    <div class="main">
        <div class="container gt-5">
            <div class="row sticky-parent ">
                <div class="col-12 col-md-12 col-xl-9">
				    <div class="box shadow pb-5">
                        <h1 class="title title--h1 first-title title__separate">All bookings</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>colomn</th>
                                    <th>colomn</th>
                                    <th>colomn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>value1</td>
                                    <td>value1</td>
                                    <td>value1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>  
        </div>
    </div>
</div>
</div>
    </div>
</x-app-layout>   
