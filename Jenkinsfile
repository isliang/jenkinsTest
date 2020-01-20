pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                zsh 'echo "Hello World"'
                zsh '''
                    echo "Multiline shell steps works too"
                    ls -lah
                '''
            }
        }
    }
}
