pipeline {
    agent {docker 'php'}
    stages {
       
        stage('deploy') {
            steps {
		
                sh '''
		
               
                echo 123 > ga.version
		           
		scp   ga.version root@115.28.186.0:/data1/www/htdocs/jenkinsTest/
                '''
		
            }
        } 
    }
}
