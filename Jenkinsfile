pipeline{
    agent any

    stages{
        stage("build"){
           steps{
                
                 sh '''
                    sudo ssh -o StrictHostKeyChecking=no -t -i /var/lib/jenkins/jk.pem ubuntu@ec2-18-218-127-85.us-east-2.compute.amazonaws.com 
                    cd /var
                    sudo rm -rf html
                    sudo mkdir html
                    cd html
                    sudo git clone https://github.com/theoafactor/bitblog.git .
                   
                    
                  

                    '''


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