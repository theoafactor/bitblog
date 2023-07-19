pipeline{
    agent any

    stages{
        stage("build"){
           steps{
                
                 sh '''
                    ssh -o StrictHostKeyChecking=no -T -i /var/lib/jenkins/jk.pem ubuntu@ec2-18-218-127-85.us-east-2.compute.amazonaws.com 
                    cd /var
                    sudo mkdir html
                    sudo git clone https://github.com/theoafactor/bitblog.git
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