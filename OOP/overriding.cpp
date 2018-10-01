#include <iostream>
using namespace std;
class shape{
	protected:
		int base,height;
	public:
		shape()
		{
			base=0;
			height=0;
		}
		void ReadshapeData(int b,int h){
			base=b;
			height=h;
		}
};
class Rectangle:public shape
{
	public:
		int area(){
		return base*height;
		}
};
class Triangle:public shape
{
	int height;
	public:
		void ReadTriangleData(int b,int h)
		{
			ReadshapeData(b,h);
		}
		int area()
		{
			return base*height*1/2;
		}
};
int main()
{
	Rectangle r;
	Triangle t;
	r.ReadshapeData(5,10);
	cout<<endl<<"The area of rectangle is"<<r.area()<<endl<<endl;
	t.ReadTriangleData(5,10);
	cout<<endl<<"The area of trianle is:"<<t.area()<<endl<<endl;
	return 0;
}
