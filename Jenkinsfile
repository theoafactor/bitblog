pipeline{
    agent any

    stages{
        stage("build"){
           steps{
                 // all images are built and pushed to Docker Hub
                 echo "build stage"
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