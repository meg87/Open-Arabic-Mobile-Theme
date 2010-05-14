تم تعديل هذا الثيم بواسطة MEG ليتوافق مع مدونات WordPress العربية, بالاعتماد على الشرح في الموقع التالي:
http://wiki.forum.nokia.com/index.php/Create_a_WordPress_theme_with_Mobile_Web_Templates
ويمكنك تعديله كما يناسبك بالاطلاع على هذا الملف او العودة الى الرابط السابق لمزيد من التفاصيل.

---------------
خطوات التثبت :
---------------
1. انسخ مجلد الثيم الى مجلد الثيمات في مدونتك على المسار التالي : wp-content/themes
2. قم بتثبيت اضافة WordPress Mobile Pack من الموقع التالي : http://wordpress.org/extend/plugins/wordpress-mobile-pack
3. من لوحة التحكم اختر من القائمة المظهر (Appearance) ثم "Mobile Switcher" 
4. اضبط خيار "Mobile Theme" الى "Open Arabic Mobile Theme"

------------------
محتويات الملفات :
------------------
header.php 
يقوم هذا الملف بعرض الجزء العلوي من الصفحة (header), والذي يحتوي على عنوان الموقع والـ metadata وشعار المدونة وملفات CSS و JavaScript المضمنة مع هذا الثيم.
sidebar.php
يقوم هذا الملف بعرض القائمة الجانبية, و التي تحتوي على القوائم و نموذج البحث.
footer.php
يقوم هذا  الملف بعرض الجزء السفلي من الصفحة (footer).
index.php   
يقوم هذا الملف باستدعاء الملفات السابقة لبناء الصفحة, كما يقوم بعرض التدوينات والتعليقات.
style.css  
هذا الملف يقوم بالتعديل على الـ Style الافتراضي بواسطة CSS.
low/baseStyles-low.css
يحتوي هذا الملف على الـ Style الافتراضي.
low/reset-low.css      
يقوم هذا الملف بضبط الخواص الافتراضية للمتصفح بحيث لا يختلف شكل الموقع على المتصفحات الاخرى.

-----------------
دوال WordPress :
-----------------
bloginfo('stylesheet_url')
تقوم هذه الدالة بطباعة الرابط الذي يشير الى مكان تواجد ملف style.css.
bloginfo('name')
تقوم هذه الدالة بطباعة اسم المدونة.
bloginfo('description')
تقوم هذه الدالة بطباعة وصف المدونة.
bloginfo('stylesheet_directory')
تقوم هذه الدالة بطباعة الرابط الذي يشير الى مكان تواجد ملفات الـ Style الافتراضي.
get_option('home')
تعيد هذه الدالة رابط الصفحة الرئيسية للمدونة.
wp_list_categories('title_li=' . __('Categories:'))
تطبع هذه الدالة قائمة باقسام المدونة.
get_header()
تقوم هذه الدالة باستدعاء ملف header.php لعرض الجزء العلوي من الصفحة.
get_footer()
تقوم هذه الدالة باستدعاء ملف footer.php لعرض الجزء السفلي من الصفحة.
get_sidebar()
تقوم هذه الدالة باستدعاء ملف sidebar.php لعرض القائمة الجانبية.

have_posts(): loops through blog posts, and returns if another post is available
the_post(): this function selects the current post, and makes it available to be used inside the while loop
the_content(), the_permalink(), the_title(): all these functions show pieces of information about the currently selected blog post
comments_template(): used when a single post is shown, in order to show the comment template 
is_single(): used to check if the page must show a single post 

