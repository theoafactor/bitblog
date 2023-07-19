pipeline{
    agent any

    stages{
        stage("build"){
           steps{
                
               sh  """
                    sudo ssh -i /var/lib/jenkins/jk.pem -tt -o StrictHostKeyChecking=no ubuntu@ec2-18-218-127-85.us-east-2.compute.amazonaws.com << EOF
                    cd /var
                    sudo mkdir test
                    exit
                    <<EOF
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