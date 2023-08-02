pipeline{
    agent any

    stages{
        stage("build"){
            agent {
                label "docker_agent_label"
            }
           steps{
                
               sh  """
                        echo 'Welcome here .. test'
                    """
               
            
               


           }
            
        }


        stage("get"){
            steps{
                echo "get stage"
            }

        }


        stage("production"){

            steps{
                echo "Production"
            }
        }



    }


}