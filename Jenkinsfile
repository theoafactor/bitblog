pipeline{
    agent any

    stages{
        stage("build"){
            agent {
                label "docker_agent_label"
            }
           steps{
                
               sh  """
                        ## get the project
                        cd /home/ubuntu/agentspace/workspace/bitblog_master
                        sudo docker compose up -d 

                       
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