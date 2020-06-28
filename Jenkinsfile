pipeline {
    agent any
    stages {
       
        stage('deploy') {
            steps {
		
                sh '''
		
               
                echo 123 > ga.version
		           
		scp   ga.version root@106.13.95.221:/data1/www/htdocs/jenkinsTest/
                '''
		
            }
        } 
    }
}
