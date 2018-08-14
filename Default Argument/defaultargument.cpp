#include <iostream>
using namespace std;
int add(const int w=10,const int z=10)
{
	return(z+w);
}
int main()
{
	cout<<add()<<endl;
	cout<<add(10,30);
	return 0;
}
