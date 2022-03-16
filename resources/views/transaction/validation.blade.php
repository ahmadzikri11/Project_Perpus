@extends('side-bar')
@section('title')
@section('content')

    <div class="flex flex-col px-12 mt-5">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <!-- component -->
                    <div class="h-auto flex items-center justify-center bg-gray-200">

                        <!-- Card -->
                        <div class="bg-white p-8 w-[32rem]">

                            <!-- Header -->
                            <header class="flex font-light text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24"
                                    stroke="#b91c1c">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                </svg>
                                <p> Validasi Data Skripsi</p>
                            </header>

                            <!-- Title -->
                            <h3 class="font-bold text-3xl mt-2">
                                Validasi
                            </h3>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                                    @foreach ($transaction as $transaction)
                                    @endforeach
                                    <table class=" table-auto min-w-auto ml-10 ">
                                        <tbody>
                                            <tr>
                                                <td
                                                    class="py-4 px-5 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Nama
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    :
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $transaction->transactions->name }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="py-4 px-5 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    NPM
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    :
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $transaction->transactions->npm }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="py-4 px-5 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Email
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    :
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $transaction->transactions->email }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="py-4 px-5 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Nomer Whatsapps
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    :
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $transaction->transactions->phone }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="py-4 px-5 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    token
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    :
                                                </td>
                                                <td
                                                    class="py-4 px-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $transaction->token }}
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>



                                    <p class="mt-4">
                                        <span class="font-bold"> Waktu Upload </span> :
                                        {{ $transaction->updated_at }}
                                    </p>



                                    <!-- -->


                                    <button
                                        class=" text-white bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button" onclick="toggleModal('modal-id')">
                                        Open regular modal
                                    </button>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="modal-id">
                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                            <!--content-->
                                            <div
                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                    <h3 class="text-3xl font-semibold">
                                                        Modal Title
                                                    </h3>
                                                    <button
                                                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('modal-id')">
                                                        <span
                                                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            ×
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
                                                        I always felt like I could do anything. That’s the main
                                                        thing people are controlled by! Thoughts- their perception
                                                        of themselves! They're slowed down by their perception of
                                                        themselves. If you're taught you can’t do anything, you
                                                        won’t do anything. I was taught I could do everything.
                                                    </p>
                                                </div>
                                                <!--footer-->
                                                <div
                                                    class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                                                    <a href="#"
                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                        <button type="button" onclick="toggleModal('modal-id')">
                                                            Cencel
                                                        </button>
                                                    </a>
                                                    <a href="#"
                                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                        <button type="button" onclick="toggleModal('modal-id')">
                                                            Validasi
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                                    <script type="text/javascript">
                                        function toggleModal(modalID) {
                                            document.getElementById(modalID).classList.toggle("hidden");
                                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                            document.getElementById(modalID).classList.toggle("flex");
                                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                        }
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection