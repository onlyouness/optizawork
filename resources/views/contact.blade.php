@extends('layouts.layout')


@section('content')
    <section class="bg-white">
        <div class="flex justify-center items-center gap-10 contact_container lg:flex-row flex-col">

            <div class="lg::w-1/2 w-full flex flex-col justify-center items-center gap-4">
                <p class="pre-title example-animation">
                    Contact
                </p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Contacter notre Agence
                    <span class="featured-text"> digital.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                            <path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
                            </path>
                        </svg> </span>
                </h2>
                <p class=" mb-0 lg:mb-16 font-light text-center text-gray-500  sm:text-xl w-full lg:w-4/5">Réponse sous quelques heures. Nous
                    sommes également joignable par téléphone au <span onclick="call:+212528233354">(+212) 5 28 23 33
                        54</span> </p>

            </div>
            <div class="pt-0 pb-8 lg:py-16 px-4 lg:w-1/2 w-full">

                <form action="{{ route('contactsave') }}" method="POST" class="space-y-8 w-full">
                    @csrf
                    <div class="flex lg:flex-row flex-col gap-4">
                        <div class=" lg:w-1/2 w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" id="email" name="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5   dark:shadow-sm-light"
                                placeholder="nom@gamil.com" required>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 ">Nom</label>
                            <input type="text" id="nom" name="nom"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5   dark:shadow-sm-light"
                                placeholder="John" required>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                        <input type="text" id="subject" name="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500   dark:shadow-sm-light"
                            placeholder="J'ai Un Projet!" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
                        <textarea id="message" name="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500  "
                            placeholder="Commentaire..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg  bg-purple-700 hover:bg-purple-400 sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 ">
                            Envoyer message</button>
                </form>
            </div>
        </div>
    </section>
@endsection
