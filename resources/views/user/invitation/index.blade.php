<x-app-layout>
    <title>  {{ $pageTitle }} | {{ config('app.name') }} </title>

    {{-- <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8" id="vue-app">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <div v-for="(invitation, index) in invitationComments" :key="invitation.id" class="bg-white shadow-sm rounded-lg divide-y">
                <!-- Looping melalui comments di dalam invitation -->
                <div v-for="comment in invitation.comments" :key="comment.id" class="p-6 flex space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                  <div class="flex-1">
                    <div class="flex justify-between items-center">
                      <div>
                        <!-- Menampilkan nama tamu -->
                        <span class="text-gray-800"> @{{ comment.guest_name }}</span>
                        <!-- Menampilkan waktu komentar -->
                        <small class="ml-2 text-sm text-gray-600">
                            @{{ formatDate(comment.created_at) }}
                        </small>
                      </div>
                    </div>
                    <!-- Menampilkan konten komentar -->
                    <p class="mt-4 text-lg text-gray-900">@{{ comment.content }}</p>
                  </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<ol class="relative border-s border-gray-200">
    <li class="mb-10 ms-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </span>
        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">Flowbite Application UI v2.0.0 <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Latest</span></h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Released on January 13th, 2022</time>
        <p class="mb-4 text-base font-normal text-gray-500">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700"><svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
    <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
  </svg> Download ZIP</a>
    </li>
    <li class="mb-10 ms-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900">Flowbite Figma v1.3.0</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Released on December 7th, 2021</time>
        <p class="text-base font-normal text-gray-500">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
    </li>
    <li class="ms-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900">Flowbite Library v1.2.2</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Released on December 2nd, 2021</time>
        <p class="text-base font-normal text-gray-500">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
    </li>
</ol>


                </div>
            </div>
        </div>
    </div>


    <script type="module">
        import { createApp, ref, onMounted } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
        dayjs.extend(window.dayjs_plugin_relativeTime);


        createApp({
          setup() {
            const message = ref('');
            const invitationComments = ref(null);

            // membuat functions
            const getComments = async () => {
                try {
                    const response = await  axios.get('invitation-reply');
                    message.value = response.data.message;
                    invitationComments.value = response.data.data
                    console.log(invitationComments.value)

                } catch (error) {
                    console.log(error);
                }
            };

            const formatDate = (date) => {
                return dayjs(date).fromNow(); // Format tanggal menjadi waktu relatif, misalnya "2 hours ago"
            };

            onMounted(() => {
                getComments()
            });

            return {
              message,
              invitationComments,
              formatDate,
            }
          }
        }).mount('#vue-app')
      </script>
</x-app-layout>
