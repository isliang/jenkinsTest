pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'pwd'
            }
        }
        stage('test') {
            steps {
                sh 'phpunit'
            }
        }
    }
}
