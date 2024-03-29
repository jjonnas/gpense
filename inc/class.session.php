<?php
class session {

    /*****************************
    ** func - sessions()
    ** @Constructor
    ** @Access - public
    ** @Desc - The cunstructor used for warming up
    ** and preparing the sessions.
    ** @params - None
    *****************************/
    function session()
    {
        // Let's initialise the sessions
        session_start();
    }


    /*****************************
    ** func - set_var()
    ** @Access - public
    ** @Desc - Set a session variable
    ** @param $var_name - the variable name
    ** @paran $var_val  - value for $$var_name
    *****************************/
    function set_var( $var_name, $var_val )
    {
        if( !$var_name || !$var_val )
        {
            return false;
        }
        $_SESSION[$var_name] = $var_val;
        return true;
    }


    /*****************************
    ** func - get_var()
    ** @Access - public
    ** @Desc - Get a session variable
    ** @param $var_name -  the variable name to be retrieved
    *****************************/
    function get_var( $var_name )
    {
        return $_SESSION[$var_name];
    }


    /*****************************
    ** func - delete_var()
    ** @Access - public
    ** @Desc - Delete a session variable
    ** @param $var_name -  the variable name to be deleted
    *****************************/
    function del_var( $var_name )
    {
        unset( $_SESSION[$var_name] );
    }


    /*****************************
    ** func - delete_vars()
    ** @Access - public
    ** @Desc - Delete session variables contained in an array
    ** @param $arr -  Array of the elements
    ** to be deleted
    *****************************/
    function del_vars( $arr )
    {
        if( !is_array( $arr ) )
        {
            return false;
        }
        foreach( $arr as $element )
        {
            unset( $_SESSION[$element] );
        }
        return true;
    }


    /*****************************
    ** func - delete_all_vars()
    ** @Access - public
    ** @Desc - Delete all session variables
    ** @params - None
    *****************************/
    function del_all_vars()
    {
        $_SESSION = array();
    }
	
    
    /**
     * func - is_registered($var)
     * @Acess - public
     * @Desc - Verifica se uma variavel existe na sess�o
     * @params $var - nome da variavel
     */ 
    function is_registered($var){
    	return session_is_registered($var);
    }

    /*****************************
    ** func - end_session()
    ** @Access - public
    ** @Desc - Des! ! troy the session
    ** @params - None
    *****************************/
    function end_session()
    {
        $_SESSION = array();
        session_destroy();
    }

}// End class session
?>