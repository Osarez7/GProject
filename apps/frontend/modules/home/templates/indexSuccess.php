
<div id="home-content">


   <?php if ($sf_user->hasCredential('admin')): ?>
        
    <div id="admin-home">
          
      <ul id="menu-admin">
           <li id="home-admin">
              
            <img src="/images/fugue-icons-3.5/icons/alarm-clock.png">
               Tareas
           </li>
        
        <li id="user-admin">
         <img src="/images/fugue-icons-3.5/icons/user.png">
             <span>Usuarios</span>
         </li>
        
        <li id="system-admin">
               <img src="/images/fugue-icons-3.5/icons/wrench-screwdriver.png">
            <span> Sistema</span>
        </li>

         <li id="system-admin">
               <img src="/images/fugue-icons-3.5/icons/palette.png">
            <span> Estilos </span>
        </li>
      </ul>     
        
    </div>
    
    <?php endif; ?>
  


    <?php if ($sf_user->hasCredential('gerente')): ?>
        
    <div id="proyectos-home">
        
    </div>
    
    <?php endif; ?>   

 
    
    <?php if ($sf_user->hasCredential('ejecutor')): ?>
        
    <div id="tareas-home">
        
    </div>

  <?php endif; ?>   

</div>
