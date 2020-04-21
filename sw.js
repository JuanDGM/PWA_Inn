
const CACHE_STATIC    = 'static-v1';
const CACHE_DYNAMIC   = 'dynamic-v1';
const CACHE_INMUTABLE = 'inmutable-v1';


const APP_SHEL = [
    'index.php',
    'css/style.css',
    'img/Ideas.jpg',
    'img/Soluciones.jpg',
    'img/Inversion.jpg'
];

const APP_SHEL_INMUTABLE = [
    'library/css/animate.css',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    'https://code.jquery.com/jquery-3.4.1.slim.min.js',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    'js/app2.js'
];

self.addEventListener('install', e=>{
    
   const respuesta =  caches.open(CACHE_STATIC).then(cache=>{
        cache.addAll(APP_SHEL);
    });
    
   const respuesta1 =  caches.open(CACHE_INMUTABLE).then(cache=>{
        cache.addAll(APP_SHEL_INMUTABLE);
    });
    
    e.waitUntil(Promise.all([respuesta, respuesta1]));
    
});


self.addEventListener('fetch', e=>{
    
//    1. Cache with Network fallback
    
const respuesta =  caches.match(e.request).then(res=>{
       if(res){
           return res;
       }else{
        return fetch(e.request).then(newRes =>{
               caches.open(CACHE_DYNAMIC).then(cache=>{
                   cache.put(e.request, newRes.clone());
               });
               return newRes.clone();
           }).catch(err=>{
               console.log(e.request.url);
               return caches.match(e.request);
           });
       }
   });
    
    e.respondWith(respuesta);
    
});


