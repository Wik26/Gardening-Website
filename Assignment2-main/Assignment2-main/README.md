# CHT2520 Assignment 2 u2365311 Wiktoria Malodobry
## Eloquent relationships
In this project, Laravel’s Eloquent ORM was used to implement one-to-many and many-to-many relationship. These relationships provide a well-designed database that complies with the Third Normal Form (3NF). Eloquent allows the gardening website to have separate tables, which improves the maintainability of the website and possible future expansion. 

### One-to-Many
One-to-Many (1:N) was implemented using Laravel's Eloquent ORM, allowing a single table (e.g. Category) to be associated with multiple items (e.g. Plants). This was done using `hasMany()` in the category model and `belongsTo()` inside the plant model.
A one-to-many relationship was selected to create a division between category and plant, so that categories can exist as individual entities rather than storing them in each plant record. This optimises the relationship as categories can be stored independently, as well as organising the database so that it becomes more reliable and easier to manage.

Overall, the implementation of one-to-many was successful, users can view the categories of each plant. Future improvements would be to add a categories filter so that users can navigate to their chosen category.

### Many-to-Many
Many-to-Many (N:M)  was implemented using a pivot table (`PlantUser`) to demonstrate the relationship between `Plant` and `User`. This allowing multiple users to favourite multiple plants and was accomplished by using the `belongsToMany()` method for both models. 
This approach was chosen to avoid duplicate code by storing the foreign keys of each table inside the pivot table. This ensures that the database is consistent and maintains database normalisation making it easier for future expansion. 

Although the implementation of a N:M relationship was successful – users can add plants to their favourites – it required some prior knowledge to add it to the MVC. Future improvements would include adding a remove button, allowing the user to modify and personalise their favourite page. 

## Authentication & Authorisation
Authentication and authorisation are crucial security features in web development to ensure that sensitive user data is protected and access is restricted. Authentication verifies the user’s details against stored data, while authorisation checks the user’s permission or role to determine what actions  are permitted.

### Authentication
Authentication was implemented using Laravel's built-in authentication and session services (e.g. Auth and Session), allowing users to securely login and logout of the gardening website. Passwords are stored using Laravel's `Hash,` to encrypt the user’s password inside the database and protect it from potential data breaches.
The authentication feature was used to restrict access to unauthorised webpages – such as create and edit, preventing guests from accessing or modifying the websites content. This was achieved by using the `middleware` feature shown below:
```
->middleware(['auth']);
```
This ensures that only authorised users can access specified routes. An additional flash message was inserted to inform that the user’s credentials do not match, this feedback will notify the user to re-enter their information.

The implementation of authentication was successfully;  the built-in features made the process effortless and reliable. Future improvements would be to add more advanced authentication, ensuring that the gardening website is secure from potential cyber breaches.

### Authorisation
Authorisation was implemented using Laravel's Gate feature to authorise user permissions. This provides strict access to sensitive parts of the website, only allowing authorised users to perform advanced actions (e.g. creating, editing or deleting). This was accomplished by assigning the users with a `role_id` of 2 to show that the user has correct authorisation. The code below shows `can:edit` to check whether user is authorised to access a route.  
```
->middleware(['auth', 'can:edit']);  
```
This ensures that authorisation controls the accessibility by checking the permission level of users. Even authenticated users that do not have the correct authorisation, are prevented from viewing or altering content.

Overall, the implementation of authorisation was successful, restricting unauthorised users from altering the content of the website. Future improvements could involve adding policies to further strengthen the website’s controls.

## Responsive Design
Responsive design is key feature of web development that accommodates the layout to different screen sizes and devices. This ensures that the gardening website is accessible and functional to multiple devices – desktop, tablet and mobile.

### CSS Good Practise
Responsive CSS techniques were used to enhance the flexibility and visual appearance of the website. CSS display `flex` was used to arrange the header and align the content, while `grid` view was used to display and scale the layout of individual plants. This allowed the website to acquire fluid transitions and improved arrangement, allowing the content to flow naturally. 

Additionally, changing the fixed pixel (`px`) for font sizes and padding to a relative measurement (`em`) to adapt content to different sizes. This enabled the content to dynamically change as the website resizes to fit any device and resolution.

A future CSS improvement would be to use the tailwind framework to eliminate the need for custom CSS, or to remove any redundant or duplicate CSS to improve performance and load speeds.

### Media Queries
Media queries were introduced to adapt and display content for different screen sizes. There are different breakpoints (e.g. tablet and desktop) to accommodate the variety of resolutions and provide a gradual transition. The CSS was modified for a mobile first approach, therefore, content inside transitions from single-column layout to multi-column. This improves the accessibility of the gardening website by displaying content according to the user’s screen size, encouraging mobile users to access the website. 

Additional improvements would include adjusting the content more towards specific devices (e.g. Samsung) and providing more seamless transitions between screen sizes.

### Hamburger Menu
A hamburger menu was implemented for smaller screen sizes; the horizontal navigation bar is replaced with a burger menu once the screen reaches its breakpoint. The burger menu displays a column view of the navigation options to reduce the clutter and to enable the user to focus on the main content. This mobile friendly approach maintains the aesthetic consistency, while providing accessibility for mobile users. 

Future improvements could include incorporating additional JavaScript to add more interactivity, to provide smother animations between opening and closing the menu.

### Additional Feature – Images
Images were implemented to provide a visual representation of each plant, improving the user engagement and satisfaction. This makes the gardening website more appealing as users can efficiently identify plants without any confusion.

A current limitation of this feature is that the images do not save once the user updates a plant. As opposed to displaying the newly added image, the website presents modified details with the older image. This is a key issue as website admins will need to delete a plant if the image requires changing.

## Sources
### Image Sources
- Pixabay. (2017). Rose Bicolored Flower. [Photograph]. https://pixabay.com/photos/rose-bicolored-flower-bicolored-rose-2417334/
- Tomulus64. (2025). Flowers Nature Plant. Pixabay. [Photograph]. https://pixabay.com/photos/flowers-nature-plant-flora-bloom-9578969/
- Mejimages. (2017). Iris Purple Flower. Pixabay. [Photograph].https://pixabay.com/photos/iris-purple-flower-purple-iris-2357673/
- Minka2507. (2023). Tulip Flower Plant. Pixabay. [Photograph].https://pixabay.com/photos/tulip-flower-plant-spring-pink-7882705/
- PublicDomainPictures. (2012). Field Flowers Grape Hyacinth. Pixabay. [Photograph].https://pixabay.com/photos/field-flowers-grape-hyacinth-21687/
- Moritz320. (2015). Tree Nut Juglans Regia Walnut. Pixabay. [Photograph]. https://pixabay.com/photos/tree-nut-juglans-regia-walnut-967128/
- Hans. (2011). Spruce Cones Tap Tree. Pixabay. [Photograph].https://pixabay.com/photos/spruce-cones-tap-tree-conifer-10617/
- Hans. (2012). Pasture Tree Hang Real Weeping. Pixabay. [Photograph].https://pixabay.com/photos/pasture-tree-hang-59737/
- BabaMu. (2017). Birch Bark White Tree. Pixabay. [Photograph].https://pixabay.com/photos/birch-bark-white-tree-bark-skyward-2300857/
- Mariya_m. (2022). Oak Tree Forest. Pixabay. [Photograph].https://pixabay.com/photos/oak-tree-forest-meadow-fall-grass-7468708/
- Etienne-F59. (2018). Grape Merlot Wine Cluster. Pixabay. [Photograph]. https://pixabay.com/photos/grape-merlot-wine-cluster-grape-3716718/
- Brumarotta. (2018). Blueberry Fruit Berry. Pixabay. [Photograph]. https://pixabay.com/photos/blueberry-fruit-berry-food-blue-3633021/
- Sever89. (2020). Currant Branch Green. Pixabay. [Photograph]. https://pixabay.com/photos/currant-branch-green-berry-black-5386884/
- Elenaiks. (2016). Raspberries Raspberry Bush Food. Pixabay. [Photograph]. https://pixabay.com/photos/raspberries-raspberry-bush-food-1700485/
- Hans. (2020). Indian Mock Strawberry. [Photograph]. https://pixabay.com/photos/indian-mock-strawberry-strawberry-5389621/

### File Upload for Images
- Code With ERaufi. (2025, April 17). Laravel 12 Image Upload Tutorial|How to Upload & Store Images in Laravel. YouTube. [Video]. https://www.youtube.com/watch?v=SvIxR9oacJs
- Ramadhani, I. (2023). Upload File in Laravel. Medium. https://medium.com/@iqbal.ramadhani55/upload-file-in-laravel-9394efbd7867
- Laravel. (n.d.). Retrieving Uploaded Files. https://laravel.com/docs/12.x/requests#validating-successful-uploads
- Laravel. (n.d.). File Storage. https://laravel.com/docs/12.x/filesystem

#### Showing Image File
- Funda Of Web IT. (2021, May 30). Laravel Image CRUD-3: How to edit and update image in laravel 8 (remove old & upload new image). YouTube. [Video]. https://www.youtube.com/watch?v=8itxDu-xA7Q

### Flash Message
- Malys, D. (2017). Laravel "Wrong password" error message. Stack overflow. https://stackoverflow.com/questions/45475990/laravel-wrong-password-error-message#:~:text=You%20can%20use%20like%3A%20%5CSession,message%20in%20the%20blade%20file!

### Favourites
- Thayf, S. (2011). JavaScript hide/show element. Stack overflow. https://stackoverflow.com/questions/6242976/javascript-hide-show-element
- Mehrdad70. (n.d.) Add product to favorites. Laracasts. https://laracasts.com/discuss/channels/laravel/add-product-to-favorites
- Hashem, A. (2020). Laravel Eloquent - Attach vs. SyncWithoutDetaching. Stack overflow. https://stackoverflow.com/questions/62104188/laravel-eloquent-attach-vs-syncwithoutdetaching