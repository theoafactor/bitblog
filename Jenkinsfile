pipeline{
    agent any

    stages{
        stage("build"){
           steps{
                
                 sh '''
                    #ssh -o StrictHostKeyChecking=no -T -i /var/lib/jenkins/jk.pem ubuntu@ec2-18-218-127-85.us-east-2.compute.amazonaws.com 
                    cd /var
                    sudo rm -rf html
                    sudo mkdir html
                    cd html
                    sudo git clone https://github.com/theoafactor/bitblog.git .
                    sudo docker rmi $(sudo docker images)
                    sudo docker build -t bitblog:1 .
                    
                    sudo docker run --rm -d -p 80:80 bitblog:1

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