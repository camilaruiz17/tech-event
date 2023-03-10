<h1>Project: "Tech Events Manager"</h1>

<h2>1. Project description:</h2>
<ul>
<li>The client has asked us to design and develop a web application for the management of events or online meetups.</li>
<li>This application is linked to the registration of superheroes to an event that will have as its purpose,</li>
<li>Save the earth from the attack of villains.</li>
<li>Superheroes will be able to view the event description (Attack Threat), sign up and unsign.</li>
<li>Superheroes will be able to see the list of events they have signed up to save the planet.</li>
<li>The administrator will have the tools for the management (CRUD) of the events.</li>
</ul>

<h2>2. User stories:</h2>

<h3>2.1 User Story (Guest):</h3>
<ul>
<li>See the page.</li>
<li>Have the option of pressing the info button to view the events.</li>
<li>Have the option to login to be a user, see the events and sign up for them.</li>
</ul>

<h3>2.2 User Story (User):</h3>
<ul>
<li>Being able to register for events.</li>
<li>Receive an email with the details of the event in which you have registered.</li>
<li>See the list of events in which you are registered.</li>
<li>Receive an email confirmation of your registration.</li>
<li>Unregister events you don't want to attend.</li>
</ul>

<h3>2.3 User Story (Administrator):</h3>
<ul>
<li>View page as admin.</li>
<li>Access events.</li>
<li>Add new events.</li>
<li>Delete events.</li>
<li>Edit events.</li>
<li>Modify the capacity of events.</li>
</ul>

<h2>3. Fullstack Developer Team</h2>

<ul>
<li>Carmen Cruces (Scrum Master) https://github.com/CarmenCruces</li>  
<li>Alba Rus https://github.com/Albaric0que</li> 
<li>Natalia Palomo https://github.com/Nataliaplm</li> 
<li>Camila Ruíz (Product Owner) https://github.com/camilaruiz17/li> 
<li>Sandra León https://github.com/sandraldr27</li>   
</ul>


<h2>4. Project Demo</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<video src="https://user-images.githubusercontent.com/116546588/215846152-6bed9758-cfdf-4e63-a97a-6400d2c9f3fc.mp4" width="440" height="280" controls></video>
</div>

<h2>5. Initial Sketch</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:400px; margin:12px" src="https://user-images.githubusercontent.com/116546588/213318272-30867356-f456-4fe5-bdd4-ce6a9526c6e1.png" alt="initialSketch"/>
</div>

<h2>6. Atomic Design</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:250px; height:400px; margin:12px" src="https://user-images.githubusercontent.com/116546588/213406315-f64eec51-42c3-4ee7-b5a4-4fe785958981.png" alt="Atomic Design"/>
</div>

<h2>7. Final Design</h2> 
<div style="heigth:400px;  display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:500px; margin:12px" src="https://user-images.githubusercontent.com/116546588/213404594-4e2ce34a-6da1-498d-9cc9-5fa599af9ccc.png" alt="PFinal Design "/>
</div>

<h2>8. Stacks</h2>
<ul>
<li>HTML5</li>
<li>CSS3</li>
<li>PHP</li>
<li>Laravel</li>
<li>Boostrap</li>
<li>NPM</li>
</ul>

<h2>9. Required:</h2>
<li>Composer & Laravel Installed.</li>
<li>XAMPP/LAMPP Installed.</li>
<li>NPM Installed.</li>
<li>MySQL.</li>
<li>PHP Artisan Serve.</li>
<li>PHP (Minimum, version 7.4).</li>

<h3>To install Project</h3>
<li>Open the IDE</li>
<li>In the link https://github.com/camilaruiz17/tech-eventaccess the CODE tab.</li>
<li>Within the CODE tab copy the link that appears in HTTPS.</li>
<li>In the IDE run <b>git clone</b> command, an paste the HTTPS.</li>
<li>Write in the IDE terminal the command: <b>composer install </b>or <b>composer update</b> (If you have previously installed composer), and press intro.</li>
<li>Write in the IDE terminal the command: <b>composer create-project --prefer-dist</b> and press intro.</li>
<li>An <b>.env</b> file (in the form of a little wheel) will be downloaded. Go into it and rename the line <b>DB_DATABASE</b>. Change the name generated by default and write <b>tech-event.</b></li>
<li>Open XAMPP or LAMPP.</li>
<li>Login to <b>phpMyAdmin</b> and create a new table named <b>tech-event.</b></li>
<li>Type in the IDE terminal: <b>php artisan migrate:fresh --seed</b> and press intro.</li>
<li>Type in the IDE terminal: <b>composer require laravel/ui</b> and press intro.</li>
<li>Type in the IDE terminal: <b>php artisan ui bootstrap --auth</b> and press intro.</li>
<li>Type in the IDE terminal: <b>npm install</b> and press intro.</li>
<li>Type in the IDE terminal: <b>npm run dev</b> and press intro. Then open another terminal in the IDE without closing the previous one</li>
<li>Type in the IDE terminal: <b>php artisan migrate</b> and press intro</li>
<li>Type in the IDE terminal: <b>php artisan serve</b> and press intro.</li>

<h3>Warning & Testing</h3>
<ol>
<li><b>Important</b>: If we then need to run more commands in the IDE, we'll open a third terminal without closing the previous two.</li>
<li><b>Test</b>: Run in the IDE <b>php artisan test</b> & <b>vendor/bin/phpunit</b> where it should return the following result:<b> 5 passed</b> and <b> OK (5 test, 14 assertions)</b></li>
</ol>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:500px; margin:12px" src="https://user-images.githubusercontent.com/116546588/215830259-64fddeca-d2f8-481e-9eb5-30d82d953a07.png" alt="finalTest"/>
</div>

<h2>10. Methodology:</h2>
<ul>
<li>Mob programming.</li>
<li>Pair programming.</li>
<li>Agile with SCRUM</li>
</ul>


<h2>11. Next Steps</h2>
<ul>
<li>Continue to implement the CRUD.</li>
<li>Continue implementing the design.</li>
<li>Continue implementing functionalities.</li>
</ul>



