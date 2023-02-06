import Index from './components/Index'
import HelloWorld from './components/content/HomePage'
import ContentOne from './components/content/ContentOne'
import ContentTwo from './components/content/ContentTwo'



const routes = [,
    {
        path: '/',
        component: Index,
        name: 'Index',
        redirect: '/',
        children: [
            {
                path: '/',
                component: HelloWorld,
            },
            {
                path: 'ContentOne',
                name: 'contentone',
                component: ContentOne,
            },
            {
                path: 'ContentTwo',
                name: 'contentwo',
                component: ContentTwo,
            }
        ]
    }
   
];

// const DEFAULT_TITLE = 'Shop';
// routes.beforeEach((to) => {
//   document.title = to.meta.title || DEFAULT_TITLE + ' - '+to.name;  
// });
// (function() {
//   var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
//   link.type = 'image/x-icon';
//   link.rel = 'shortcut icon';
// //   link.href = appSetting.LOGO_APP;
//   document.getElementsByTagName('head')[0].appendChild(link);
// })();

export default routes;