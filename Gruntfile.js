module.exports = function (grunt) {
	grunt.initConfig({
		less: {
			development: {
				options: {
					compress: false,
					cleancss: false,
					optimization: 2,
					dumpLineNumbers: 'false'
				},
				files: {
					"assets/css/style.css": "assets/less/style.less"
				}
			}
		},
		//grunt copy task for distribution
		copy: {
			dist: {
				files: [
					{
						src: ['index.php'],
						dest: 'dist/'
					},
					{
						src: ['assets/font/**', 'assets/image/**'],
						dest: 'dist/'
					},
					{
						src: 'lib/jquery/dist/jquery.min.js',
						dest: 'dist/lib/jquery/dist/jquery.js'
					},
					{
						src: 'lib/validate/validate.min.js',
						dest: 'dist/lib/validate/validate.js'
					},
					{
						src: 'include/**',
						dest: 'dist/include/'
					},
					{
						src: 'pages/**',
						dest: 'dist/pages/'
					}
				]
			}
		},
		cssmin: {
			dist: {
				files: {
					"dist/assets/css/style.css": "assets/css/style.css"
				}
			}
		},

		uglify: {
			dist: {
				files: [
					{
						expand: true,
						src: [
							'app/**/*.js',
							'lib/requirejs/*.js',
							'lib/CanJS/amd/**/*.js',
							'lib/requirejs-canjs-templates/stache.js',
							'lib/text/text.js'
						],
						dest: 'dist/'
					}
				]
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['less']);

	grunt.registerTask('build', ['less', 'copy', 'uglify', 'cssmin']);
};
