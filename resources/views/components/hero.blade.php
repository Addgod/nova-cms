<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -16 512 512" width="100%" height="100%" style="position: fixed;top: 50px; right: 0; opacity: 0.2"><path d="m467 0h-422c-24.8125 0-45 20.1875-45 45v300c0 24.8125 20.1875 45 45 45h130.1875l-20 60h-49.1875c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h300c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-49.1875l-20-60h130.1875c24.8125 0 45-20.1875 45-45v-300c0-24.8125-20.1875-45-45-45zm-280.1875 450 20-60h98.375l20 60zm295.1875-105c0 8.269531-6.730469 15-15 15-43.582031 0-377.964844 0-422 0-8.269531 0-15-6.730469-15-15v-15h452zm-318.421875-131.210938-13.644531-13.640624 21.210937-21.214844 13.644531 13.644531c4.835938 4.835937 12.332032 5.789063 18.226563 2.3125 8.429687-4.96875 17.429687-8.714844 26.746094-11.128906 6.617187-1.710938 11.238281-7.683594 11.238281-14.519531v-19.242188h30v19.242188c0 6.835937 4.621094 12.808593 11.238281 14.519531 9.3125 2.414062 18.3125 6.160156 26.742188 11.132812 5.894531 3.472657 13.390625 2.519531 18.226562-2.316406l13.644531-13.644531 21.214844 21.214844-13.644531 13.644531c-4.835937 4.835937-5.789063 12.332031-2.3125 18.222656 4.972656 8.433594 8.714844 17.433594 11.128906 26.746094 1.710938 6.617187 7.683594 11.238281 14.519531 11.238281h19.242188v30h-61.515625c1-4.914062 1.515625-9.941406 1.515625-15 0-41.355469-33.644531-75-75-75s-75 33.644531-75 75c0 5.058594.515625 10.085938 1.515625 15h-61.515625v-30h19.242188c6.835937 0 12.808593-4.621094 14.523437-11.238281 2.410156-9.3125 6.15625-18.3125 11.125-26.746094 3.472656-5.890625 2.523437-13.386719-2.3125-18.226563zm137.421875 71.210938c0 5.136719-.890625 10.210938-2.578125 15h-84.84375c-1.6875-4.789062-2.578125-9.863281-2.578125-15 0-24.8125 20.1875-45 45-45s45 20.1875 45 45zm181 15h-61v-45c0-8.285156-6.714844-15-15-15h-23.171875c-1.554687-4.359375-3.339844-8.644531-5.347656-12.84375l16.40625-16.402344c5.855469-5.859375 5.855469-15.355468-.003907-21.214844l-42.425781-42.425781c-2.8125-2.8125-6.628906-4.390625-10.605469-4.390625-3.976562 0-7.792968 1.578125-10.605468 4.390625l-16.402344 16.40625c-4.199219-2.007812-8.484375-3.792969-12.84375-5.34375v-23.175781c0-8.285156-6.714844-15-15-15h-60c-8.285156 0-15 6.714844-15 15v23.175781c-4.359375 1.550781-8.644531 3.335938-12.84375 5.34375l-16.402344-16.40625c-2.8125-2.8125-6.628906-4.390625-10.605468-4.390625-3.980469 0-7.792969 1.578125-10.609376 4.390625l-42.421874 42.425781c-5.859376 5.859376-5.859376 15.355469 0 21.214844l16.402343 16.40625c-2.007812 4.195313-3.789062 8.480469-5.34375 12.839844h-23.175781c-8.285156 0-15 6.71875-15 15v45h-61v-255c0-8.269531 6.730469-15 15-15h422c8.269531 0 15 6.730469 15 15zm0 0" fill="#000000"/><path d="m406 60c-24.8125 0-45 20.1875-45 45s20.1875 45 45 45 45-20.1875 45-45-20.1875-45-45-45zm0 60c-8.269531 0-15-6.730469-15-15s6.730469-15 15-15 15 6.730469 15 15-6.730469 15-15 15zm0 0" fill="#000000"/></svg>
<div class="container-fluid">
    <div class="row align-items-center" style="min-height: 100vh">
        <div class="col text-center">
            {!! Illuminate\Mail\Markdown::parse($block['content']) !!}
        </div>
    </div>

</div>
